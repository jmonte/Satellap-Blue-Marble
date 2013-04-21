<!DOCTYPE html>
<html>
<head>
    <title>Blue Marble - <?php echo $geon; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
     <script src="//maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyDJy3Vdbbdu74sDnbVE3r4PoS-PH7kEa5M" type="text/javascript"></script>
    <script type="text/javascript">
    
    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(37.4419, -122.1419), 13);
 
        // Add 10 markers to the map at random locations
        var bounds = map.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
        var lngSpan = northEast.lng() - southWest.lng();
        var latSpan = northEast.lat() - southWest.lat();
        for (var i = 0; i < 10; i++) {
          var point = new GLatLng(southWest.lat() + latSpan * Math.random(),
                                  southWest.lng() + lngSpan * Math.random());
          map.addOverlay(new GMarker(point));
        }
      }
    }

    </script>
</head>
<body>
     <div class="container">
        <div class="row">

        <img src="<?php echo $url; ?>" class="span6" />
        
        
        <div class="span6">
                <h2><?php echo ucwords(strtolower($geon)); ?> - <?php echo ucwords(strtolower($feat)); ?> </h2>
        <div id="map_canvas" style="width: 500px; height: 300px"></div>

          <div class="fb-comments" data-href="<?php echo site_url('image/view'. $id); ?>" data-width="470" data-num-posts="10"></div>

            </div>
        </div>
    </div>



    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=452804038127877";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>