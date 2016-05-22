<?php
  $page_title = "Where – Ella &amp; Alex's Wedding";
  include "includes/head.php";
?>

  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.15.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.15.0/mapbox-gl.css' rel='stylesheet' />

  <div id="wrapper">
    <main id="content">
      <?php
        $active = "where";
        include "includes/header.php";
      ?>

      <section id="where">
        <h1>Where</h1>

        <p>Our wedding ceremony and reception take place at the Southern Pavilion at the very end of Worthing Pier.</p>

        <p>Marine Parade<br>
        Worthing<br>
        West Sussex<br>
        BN11 3PX</p>

        <div id="map"></div>

        <h2>How to get there</h2>

        <h3>By car</h3>

        <p>Worthing is situated just off the A27 between Brighton and Chichester. From London you can take the A23 towards Brighton, and then take the A27 to Worthing, or take the A24 all the way. The postcode for satnav is BN11 3PX. The pier is signposted from Worthing town centre.</p>

        <h4>Parking</h4>

        <p>The nearest car park is approximately 10 mins walk from the Pavilion. There is parking along the seafront but it likely to be more expensive and for short durations. Ardur and Worthing Council have <a href="http://www.adur-worthing.gov.uk/parking/car-parks/">pricing and locations for the car parks</a> on their website.</p>

        <h3>By train</h3>

        <p>Trains from London to Worthing take about 1hr and 30 mins from Victoria, with direct services running every 30 mins and cost about £30. The last train on a Saturday leaves at 10.15pm. <a href="http://www.nationalrail.co.uk/">National Rail Enquiries</a> for times and fares.</p>

        <p>The station is a 20 minute walk to the pier.</p>

        <h4>Taxi to the pier</h4>

        <p>There’s a taxi rank directly outside the station. A taxi to the pier will cost about £5.</p>

        <h3>By plane</h3>

        <p>The nearest airport is London Gatwick. Worthing is about an hour away by train or 50 mins by car.</p>

        <h3>Local taxis</h3>

        <p><a href="#">Arrow Taxis</a><br>
        34 Railway Approach<br>
        Worthing<br>
        West Sussex<br>
        BN11 1UR</p>

        <p>01903 21 21 21</p>

        <p><a href="#">Worthing Taxis</a><br>
        65 Victoria Road <br>
        Worthing <br>
        West Sussex <br>
        BN11 1UN</p>

        <p>01903 53 33 33</p>

        <h2>Where to stay</h2>

        <p>Worthing is a British seaside town, there a quite a few old hotels but you will get best value per person via AirBnB. We advise you to book something soon as the town books up in peak season, and there will be several weddings in Worthing that weekend. </p>

        <h3>Hotels</h3>

        <p><a href="http://www.ardingtonhotel.co.uk/ ">Ardington Hotel</a></p>

        <p><a href="http://www.chatsworthworthing.co.uk/">Chatsworth Worthing</a></p>

        <p><a href="http://www.theburlington.net/">The Burlington</a></p>

        <p>Premier Inn &amp; Travelodge are right on the seafront, very near the pier and quite new. Rooms are around £90-110 per night for a double.</p>

        <p><a href="http://www.premierinn.com/gb/en/hotels/england/west-sussex/worthing/worthing-seafront.html">Premier Inn</a></p>

        <p><a href="https://www.travelodge.co.uk/hotels/389/Worthing-Seafront-hotel">Travelodge</a></p>

        <h3>Apartments</h3>

        <p>There are many private rentals and B&amp;Bs in and around Worthing. We recommend looking on the following websites:</p>

        <p><a href="http://www.airbnb.com">AirBnb</a></p>

        <p><a href="https://www.tripadvisor.co.uk/VacationRentals-g190761-Reviews-Worthing_West_Sussex_England-Vacation_Rentals.html">TripAdvisor</a></p>

        <p><a href="http://www.booking.com/">Booking.com</a></p>
      </section>
    </main>
  </div>

  <script src="/assets/javascripts/map.js"></script>

<?php include "includes/footer.php"; ?>
