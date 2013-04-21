<!DOCTYPE html>
<html>
<head>
    <title>Blue Marble - <?php echo $geon; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
     
</head>
<body>
     <div class="container">
        <div class="row">

        <img src="<?php echo $url; ?>" class="span6" />
        
        
        <div class="span6">
                <h2><?php echo ucwords(strtolower($geon)); ?> - <?php echo ucwords(strtolower($feat)); ?> </h2>

                <h4><?php echo $mission ?></h4>
       
          <div class="fb-comments" data-href="<?php echo site_url('image/view/'. $id); ?>" data-width="470" data-num-posts="10"></div>

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