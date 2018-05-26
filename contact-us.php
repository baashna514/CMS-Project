<?php 
  require_once('includes/top.php');
?>
  </head>
  <body>
    <?php 
      require_once('includes/header.php');
    ?>

    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated slideInLeft">
          <h1>Contact<span>&nbspUs</span></h1>
          <p style="color:white;">We are available 24x7. So feel free to contact us.</p>
        </div>
      </div>
      <img src="images/header4.jpg">
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAHWA8j1JsWkAfjNi5U29pcwzm2QwXrPIc'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.org/'>GetTheEdge Map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=2e29ba99abef099b3e03300f887ac04efbac7636'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(31.5650084,74.31933750000007),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.5650084,74.31933750000007)});infowindow = new google.maps.InfoWindow({content:'<strong>GetTheEdge Lahore</strong><br>Room#312 K.E.M.U Boys Hostel Hall Road Lahore<br>54000 Lahore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
              </div>
              <div class="col-md-12 contact-form">
                <h2>Contact Form</h2>
                <form action="">
                  <div class="form-group">
                    <label for="full-name">Full Name*:</label>
                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email*:</label>
                    <input type="text" id="Email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Website">Website:</label>
                    <input type="text" id="Website" class="form-control" placeholder="Website">
                  </div>
                  <div class="form-group">
                    <label for="Message">Message:</label>
                    <textarea id="Message" class="form-control" cols="30" rows="10" placeholder="Your message should be here"></textarea>
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <?php 
              require_once('includes/sidebar.php');
            ?>
          </div>
        </div>
      </div>
    </section>

    <div class="footer-dark">
      <?php 
        require_once('includes/footer.php');
      ?>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>