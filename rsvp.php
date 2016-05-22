<?php
$emailTo = '<rsvp@alexandella.wedding>';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name        = stripslashes(trim($_POST['form-name']));
    $attending   = stripslashes(trim($_POST['form-attend']));
    $dietery     = stripslashes(trim($_POST['form-dietery']));
    $dietery_details = stripslashes(trim($_POST['form-dietery-details']));
    $notes = stripslashes(trim($_POST['form-notes']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $dietery_details) || preg_match($pattern, $notes)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($name && $attending) {
        $subject = "[RSVP] $name";

        $body = "Name: $name <br /> Attending: $attending <br /> Dietery Requirements: $dietery <br />";
        if ($dietery_details != "") {
          $body .= "Dietery Details: $dietery_details <br />";
        }
        $body .= "Notes: $notes<br />";

        $headers .= sprintf( 'Return-Path: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'From: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
        $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
        $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
        $headers .= sprintf( 'Disposition-Notification-To: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
        $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
        $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );
        mail($emailTo, "=?utf-8?B?".base64_encode($subject)."?=", $body, $headers);
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><?php
  $page_title = "RSVP – Ella &amp; Alex's Wedding";
  include "includes/head.php";
?>

  <div id="wrapper">
    <main id="content">
      <?php
        $active = "rsvp";
        include "includes/header.php";
      ?>

<!--       <pre>
        <?php echo $subject; ?>
        <?php echo $body; ?>
        <?php echo "emailSent: $emailSent"; ?>
        <?php echo "hasError: $hasError"; ?>
      </pre>
 -->
      <section id="rsvp">
        <?php if ($emailSent != true) { ?>
        <h1>RSVP</h1>

        <?php if ($hasError == true) { ?>

        <div class="error error-summary">
          <h2>Oops! There was a problem</h2>

          <p>There was an error sending your RSVP. Please RSVP manually by <a href="mailto:rsvp@alexandella.wedding">sending an email to rsvp@alexandella.wedding</a>.</p>
        </div>

        <?php } ?>

        <form action="" method="post">
          <div class="form-group">
            <label for="name-input" class="form-label">Your name(s)</label>
            <input type="text" id="name-input" name="form-name" class="form-control">
          </div>

          <fieldset class="form-group">
            <legend class="form-label">Can you attend?</legend>

            <label for="attend-yes-input" class="block-label">
              <input type="radio" id="attend-yes-input" name="form-attend" value="Yes" class="form-radio">
              Yes. I/We would love to come
            </label>

            <label for="attend-no-input" class="block-label">
              <input type="radio" id="attend-no-input" name="form-attend" value="No" class="form-radio">
              No. Unfortunately I'm/we're not able to make it
            </label>
          </fieldset>

          <fieldset class="form-group">
            <legend class="form-label">Do you have any dietery requirements?</legend>

            <label for="dietery-yes-input" class="block-label" data-target="dietery-details-target">
              <input type="radio" id="dietery-yes-input" name="form-dietery" value="Yes" class="form-radio">
              Yes
            </label>

            <label for="dietery-no-input" class="block-label">
              <input type="radio" id="dietery-no-input" name="form-dietery" value="No" class="form-radio">
              No
            </label>
          </fieldset>

          <div class="js-hidden form-group panel panel-indent" id="dietery-details-target">
            <label for="dietery-details-input" class="form-label">Please let us know the details</label>

            <textarea name="form-dietery-details" id="dietery-details-input" class="form-text-area"></textarea>
          </div>

          <div class="form-group">
            <label for="notes-input" class="form-label">Notes</label>

            <textarea name="form-notes" id="notes-input" class="form-text-area"></textarea>
          </div>

          <div class="form-group">
            <button class="button" type="submit">Submit RSVP</button>
          </div>
        </form>

        <?php } else { ?>
        <h1>Thank you!</h1>

        <p>Your RSVP is winging it's way to us. We really hope you can make it, and if you're unable to come we hope to see you soon.</p>
        <?php } ?>
      </section>

    </main>
  </div>

  <script src="/assets/javascripts/show-hide.js"></script>
<?php include "includes/footer.php" ?>
