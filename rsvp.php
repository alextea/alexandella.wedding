<?php
  $page_title = "RSVP – Ella &amp; Alex's Wedding";
  include "includes/head.php";
?>

  <div id="wrapper">
    <main id="content">
      <?php
        $active = "rsvp";
        include "includes/header.php";
      ?>

      <section id="rsvp">
        <h1>RSVP</h1>

        <form action="">
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
      </section>

    </main>
  </div>

  <script src="/assets/javascripts/show-hide.js"></script>
<?php include "includes/footer.php" ?>
