<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |   Video   </title>

    <!-- Bootstrap core CSS -->
    <link href="grid-template_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid-template_files/grid.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="grid-template_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="grid-template_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-size: cover;
        background-repeat:no-repeatdisplay: compact;
      }

      body#home {
        background-color: #4e9258;
      }


      div#content {
      

        color: #D6D6D6;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        background-color: #f8f8f8;
        background-color: rgba(50, 50, 50,.6);

        border: 1px solid #999;
        padding: 10px;
        border-radius: 15px;
        -border-radius: 3px;
        -webkit-border-radius: 10px;
        box-shadow: 5px 5px 10px #999;

      }

    </style>

<!-- ++ as per Bootstrap-Images-Gallery -->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- ++ Blueimp-g. <- galleryGen -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blueimp-gallery.css">
    <link rel="stylesheet" href="css/blueimp-gallery-indicator.css">
    <link rel="stylesheet" href="css/blueimp-gallery-video.css">
    <link rel="stylesheet" href="css/demo.css">
    

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>

<!-- espacio en blanco para evitar solapamiento -->


<!-- .. -->

<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
<div id="blueimp-video-carousel" style="margin-top: 100px"  class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
</div>
<br>
<script src="js/blueimp-helper.js"></script>
<script src="js/blueimp-gallery.js"></script>
<script src="js/blueimp-gallery-fullscreen.js"></script>
<script src="js/blueimp-gallery-indicator.js"></script>
<script src="js/blueimp-gallery-video.js"></script>
<script src="js/blueimp-gallery-vimeo.js"></script>
<script src="js/blueimp-gallery-youtube.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
/*jslint evil: true */
/*global window, document*/
// Including jQuery via the protocol relative url above works for both http and https.
// Explicitly including jQuery via http allows running the Gallery demo as local file:
if (!window.jQuery) {
    document.write(
        '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>'
    );
}
</script>
<script src="js/jquery.blueimp-gallery.js"></script>
<!-- acá va el init script, sustituyendo a demo.js ? -->
<script>
$(function () {
    'use strict';

blueimp.Gallery([

<!-- video multi source - formats : WebM & MP4 -->

          {
            title: '06. El Pato del Torrente',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/06.%20El%20pato%20del%20Torrente.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: 'http://dev.librebits.info/video/mp4/06.%20El%20pato%20del%20Torrente.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },

          {
            title: '07. Picorocos en Punta Quiroga',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/07.%20Picorocos%20en%20Punta%20Quiroga.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: 'http://dev.librebits.info/video/mp4/07.%20Picorocos%20en%20Punta%20Quiroga.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },


          {
            title: '08. Amanecer en el Chalten. 720p',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/08.%20Amanecer%20en%20el%20Chalten.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: 'http://dev.librebits.info/video/mp4/08.%20Amanecer%20en%20el%20Chalten.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            title: '09. El Glaciar Viedma',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/09.%20El%20Glaciar%20Viedma.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: 'http://dev.librebits.info/video/mp4/09.%20El%20Glaciar%20Viedma.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            title: '10. Historia del Agua',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/10.%20Historia%20del%20Agua.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: 'http://dev.librebits.info/video/mp4/10.%20Historia%20del%20Agua.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            title: '11. Nevada se septiembre',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/11.%20Nevada%20de%20septiembre%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: 'http://dev.librebits.info/video/mp4/11.%20Nevada%20se%20septiembre.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          title: '12. Eclipse de Venus en la Luna',
            type: 'video/*',
            sources: [
                {
                    href: 'http://dev.librebits.info/video/webm/12.%20Eclipse%20de%20Venus%20en%20la%20Luna%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: 'http://dev.librebits.info/video/mp4/12.%20Eclipse%20de%20Venus%20en%20la%20Luna.mp4',
                    type: 'video/mp4'
                },


             ]
          },
           



    ],{
        container: '#blueimp-video-carousel',
            carousel: true
    });

});
</script>


<footer style="margin-top: 100px"> <!-- /container -->
  <?php include "components/php/footer.php"; ?>
</footer> <!-- /container -->