<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |  Bienvenida  </title>

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

    </style>

<!-- ++ as per Bootstrap-Images-Gallery -->


    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="css/demo.css">
    

  </head>

  <body id="home">
    <!-- { navbar-->
    <?php include "components/php/navbar.php"; ?>

    <!-- espacio en blanco para evitar solapamiento -->

    <video style="margin-top: 100px; max-width:100%; height: auto;" autoplay="autoplay" loop>
      <source src="http://dev.librebits.info/video/webm/Un%20viaje%20por%20patagonia_480p.webm" type="video/ogg" />
      Your browser does not support the HTML5 video tag.
    </video>

    <p><a class="btn" href="collections-index.php">Proseguir el viaje... »</a></p>

    <!-- <script src="js/jquery.blueimp-gallery.js"></script> -->

    <footer style="margin-top: 100px";> <!-- /container -->
      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
