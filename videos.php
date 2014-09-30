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

<!-- video multi source - formats : WebM, MP4 fallback -->




          {
            poster: 'images/posters/01_video_poster_19.png',
            title: '01. Apertura del Amancay, 36 hs.',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/01.%20Apertura%20del%20Amancay,%2036%20hs.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: '/videos/mp4/01%20apertura%20del%20Amancay%2036%20horas.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },

   <!-- Video 2 ?! http://patagonia-images.com/videos.php -->
          {
            poster: 'images/posters/02_video_poster_74.png',
            title: '02. Ballenas en la Península Valdés',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/02.%20Ballenas%20en%20Peninsula%20Valdes.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: '/videos/mp4/02-Ballenas.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },


      <!-- Video 3 ?! -->

           <!-- Video 4  |               -->

          {
            poster: 'images/poster/04_video_poster_48.png',
            title: '04. Condores en la Buitrera',
            type: 'video/*',
            sources: [
	           {
                    href: '/videos/webm/04.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/04.mp4',
                    type: 'video/mp4'
                },

             ]
          },


          {
            poster: 'images/posters/05_video_poster_40.png',
            title: '05. El mar, las olas',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/05.%20El%20mar,%20las%20olas.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: '/videos/mp4/05.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },


          {
            poster: 'images/posters/06_video_poster_19.png',
            title: '06. El Pato del Torrente',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/06.%20El%20pato%20del%20Torrente.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: '/videos/mp4/06.%20El%20pato%20del%20Torrente.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },

          {
            poster: 'images/posters/07_video_poster_19.png',
            title: '07. Picorocos en Punta Quiroga',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/07.%20Picorocos%20en%20Punta%20Quiroga.%20720p.webm',
                    type: 'video/webm'
                },
                       
                {
                    href: '/videos/mp4/07.%20Picorocos%20en%20Punta%20Quiroga.mp4',
                    type: 'video/mp4'
                },
                                    
             ]
          },


          {
            poster: 'images/posters/08_video_poster_65.png',
            title: '08. Amanecer en el Chalten',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/08.%20Amanecer%20en%20el%20Chalten.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/08.%20Amanecer%20en%20el%20Chalten.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/09_video_poster_58.png',
            title: '09. El Glaciar Viedma',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/09.%20El%20Glaciar%20Viedma.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/09.%20El%20Glaciar%20Viedma.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/posters/10_video_poster_74.png',
            title: '10. Historia del Agua',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/10.%20Historia%20del%20Agua.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/10.%20Historia%20del%20Agua.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/posters/11_video_poster_74.png',
            title: '11. Nevada de septiembre',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/11.%20Nevada%20de%20septiembre%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/11.%20Nevada%20se%20septiembre.mp4',
                    type: 'video/mp4'
                },

             ]
          },


          {
            poster: 'images/posters/12_video_poster_32.png',
            title: '12. Eclipse de Venus en la Luna',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/12.%20Eclipse%20de%20Venus%20en%20la%20Luna%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/12.%20Eclipse%20de%20Venus%20en%20la%20Luna.mp4',
                    type: 'video/mp4'
                },

             ]
          },


          {
            poster: 'images/posters/13_video_poster_61.png',
            title: '13. Pajaros carpinteros en el otoño',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/13.%20Pajaros%20carpinteros%20en%20el%20oto%c3%b1o%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/13.%20Pajaros%20carpinteros%20en%20el%20oto%c3%b1o.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/posters/14_video_poster_108.png',
            title: '14. Poza de marea. Cangrejos',
            type: 'video/*',
            sources: [
                {
                    href: '/videos/webm/14.%20Poza%20de%20marea.%20Cangrejos%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/14.%20Poza%20de%20marea.%20Cangrejos.mp4',
                    type: 'video/mp4'
                },
              ]
            },

            {
              poster: 'images/posters/15_video_poster_59.png',
              title: '15.Secuencia de un amanecer',
              type: 'video/*',
              sources: [
                {
                    href: '/videos/webm/15.Secuencia%20de%20un%20amanecer%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/15.%20Secuencia%20de%20un%20amanecer.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/posters/16_video_poster_20.png',
              title: '16. Secuencia de la marea. Peninsula Valdes',
              type: 'video/*',
              sources: [
                {
                    href: '/videos/webm/16.%20Secuencia%20de%20la%20marea%20Peninsula%20Valdes.%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/16.%20Secuencia%20de%20la%20marea.%20Peninsula%20Valdes.mp4',
                    type: 'video/mp4'
                },

             ]
          },

          {
            poster: 'images/posters/17_video_poster_64.png',
              title: '17. Atardecer',
              type: 'video/*',
              sources: [
                {
                    href: '/videos/webm/17.%20Atardecer%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/17.%20Atardecer.mp4',
                    type: 'video/mp4'
                },

             ]
          },


          {
            poster: 'images/posters/18_video_poster_73.png',
              title: '18. Tormenta en el mar',
              type: 'video/*',
              sources: [
                {
                    href: '/videos/webm/18.%20Tormenta%20en%20el%20mar%20720p.webm',
                    type: 'video/webm'
                },

                {
                    href: '/videos/mp4/18.%20Tormenta%20en%20el%20mar.mp4',
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
