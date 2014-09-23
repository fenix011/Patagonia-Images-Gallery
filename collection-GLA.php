<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Patagonia Images |   Misión   </title>

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
    

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!---  ++ nuevos links! ------------------------------------ >

    <div id='links'>
      <a href='/images/collections/GLA_Glaciares/GLA-001_Patagoniaburbujas del tiempo en una grieta del glaci.jpg' title='GLA-001_Patagoniaburbujas del tiempo en una grieta del glaci.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-001_Patagoniaburbujas del tiempo en una grieta del glaci.jpg' alt='GLA-001_Patagoniaburbujas del tiempo en una grieta del glaci.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-002_Patagonia_Campo de Hielo Patagonico Sur 1.jpg' title='GLA-002_Patagonia_Campo de Hielo Patagonico Sur 1.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-002_Patagonia_Campo de Hielo Patagonico Sur 1.jpg' alt='GLA-002_Patagonia_Campo de Hielo Patagonico Sur 1.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-003_Patagonia_Derrumbes en la pared frontal del glaciar .jpg' title='GLA-003_Patagonia_Derrumbes en la pared frontal del glaciar .jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-003_Patagonia_Derrumbes en la pared frontal del glaciar .jpg' alt='GLA-003_Patagonia_Derrumbes en la pared frontal del glaciar .jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-004_Patagonia_vista aerea del glaciar Perito Moreno, des.jpg' title='GLA-004_Patagonia_vista aerea del glaciar Perito Moreno, des.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-004_Patagonia_vista aerea del glaciar Perito Moreno, des.jpg' alt='GLA-004_Patagonia_vista aerea del glaciar Perito Moreno, des.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-005_Patagonia_Seracs pared frontal glaciar Perito Moreno.jpg' title='GLA-005_Patagonia_Seracs pared frontal glaciar Perito Moreno.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-005_Patagonia_Seracs pared frontal glaciar Perito Moreno.jpg' alt='GLA-005_Patagonia_Seracs pared frontal glaciar Perito Moreno.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-006_Patagonia_aerea del frente del glaciar Upsala_Santa .jpg' title='GLA-006_Patagonia_aerea del frente del glaciar Upsala_Santa .jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-006_Patagonia_aerea del frente del glaciar Upsala_Santa .jpg' alt='GLA-006_Patagonia_aerea del frente del glaciar Upsala_Santa .jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-007_Patagonia_Morena Central del glaciar Upsala_Santa Cr.jpg' title='GLA-007_Patagonia_Morena Central del glaciar Upsala_Santa Cr.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-007_Patagonia_Morena Central del glaciar Upsala_Santa Cr.jpg' alt='GLA-007_Patagonia_Morena Central del glaciar Upsala_Santa Cr.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-008_Patagonia_glaciar Upsala vista aerea_Santa Cruz.jpg' title='GLA-008_Patagonia_glaciar Upsala vista aerea_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-008_Patagonia_glaciar Upsala vista aerea_Santa Cruz.jpg' alt='GLA-008_Patagonia_glaciar Upsala vista aerea_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-009_Patagonia_glaciar Spegazzini_Santa Cruz.jpg' title='GLA-009_Patagonia_glaciar Spegazzini_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-009_Patagonia_glaciar Spegazzini_Santa Cruz.jpg' alt='GLA-009_Patagonia_glaciar Spegazzini_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-010_Patagonia_glaciar Spegazzini de cerca_Santa Cruz.jpg' title='GLA-010_Patagonia_glaciar Spegazzini de cerca_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-010_Patagonia_glaciar Spegazzini de cerca_Santa Cruz.jpg' alt='GLA-010_Patagonia_glaciar Spegazzini de cerca_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-011_Patagonia_Lagunita glaciar vista aerea_Lago Argentin.jpg' title='GLA-011_Patagonia_Lagunita glaciar vista aerea_Lago Argentin.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-011_Patagonia_Lagunita glaciar vista aerea_Lago Argentin.jpg' alt='GLA-011_Patagonia_Lagunita glaciar vista aerea_Lago Argentin.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-012_Patagonia_Iceberg 1_Lago Argentino_Santa Cruz.jpg' title='GLA-012_Patagonia_Iceberg 1_Lago Argentino_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-012_Patagonia_Iceberg 1_Lago Argentino_Santa Cruz.jpg' alt='GLA-012_Patagonia_Iceberg 1_Lago Argentino_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-013_Patagonia_Las huellas del paso del hielo_Santa Cruz.jpg' title='GLA-013_Patagonia_Las huellas del paso del hielo_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-013_Patagonia_Las huellas del paso del hielo_Santa Cruz.jpg' alt='GLA-013_Patagonia_Las huellas del paso del hielo_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-014_Patagonia_Iceberg 3_Lago Argentino_Santa Cruz.jpg' title='GLA-014_Patagonia_Iceberg 3_Lago Argentino_Santa Cruz.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-014_Patagonia_Iceberg 3_Lago Argentino_Santa Cruz.jpg' alt='GLA-014_Patagonia_Iceberg 3_Lago Argentino_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-015_Patagonia_vista aerea nacientes del glaciar Viedma_S.jpg' title='GLA-015_Patagonia_vista aerea nacientes del glaciar Viedma_S.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-015_Patagonia_vista aerea nacientes del glaciar Viedma_S.jpg' alt='GLA-015_Patagonia_vista aerea nacientes del glaciar Viedma_S.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-016_Patagonia_El Campo de Hielo mostrando derretimiento_.jpg' title='GLA-016_Patagonia_El Campo de Hielo mostrando derretimiento_.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-016_Patagonia_El Campo de Hielo mostrando derretimiento_.jpg' alt='GLA-016_Patagonia_El Campo de Hielo mostrando derretimiento_.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-017_Patagonia_el Campo de Hielo Patagonico Sur_Santa Cru.jpg' title='GLA-017_Patagonia_el Campo de Hielo Patagonico Sur_Santa Cru.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-017_Patagonia_el Campo de Hielo Patagonico Sur_Santa Cru.jpg' alt='GLA-017_Patagonia_el Campo de Hielo Patagonico Sur_Santa Cru.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-018_Patagonia_El Campo de Hielo Sur aerea desde el Marco.jpg' title='GLA-018_Patagonia_El Campo de Hielo Sur aerea desde el Marco.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-018_Patagonia_El Campo de Hielo Sur aerea desde el Marco.jpg' alt='GLA-018_Patagonia_El Campo de Hielo Sur aerea desde el Marco.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-019_Patagonia_el frente del Glaciar Perito Moreno_Santa .jpg' title='GLA-019_Patagonia_el frente del Glaciar Perito Moreno_Santa .jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-019_Patagonia_el frente del Glaciar Perito Moreno_Santa .jpg' alt='GLA-019_Patagonia_el frente del Glaciar Perito Moreno_Santa .jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-020_Patagonia_el glaciar Upsala y glaciares tributarios_.jpg' title='GLA-020_Patagonia_el glaciar Upsala y glaciares tributarios_.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-020_Patagonia_el glaciar Upsala y glaciares tributarios_.jpg' alt='GLA-020_Patagonia_el glaciar Upsala y glaciares tributarios_.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-021_Patagonia_Glaciar Viedma vista aerea de un desprendi.jpg' title='GLA-021_Patagonia_Glaciar Viedma vista aerea de un desprendi.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-021_Patagonia_Glaciar Viedma vista aerea de un desprendi.jpg' alt='GLA-021_Patagonia_Glaciar Viedma vista aerea de un desprendi.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-022_Patagonia_sol de la tarde sobre el graciar Moreno_Sa.jpg' title='GLA-022_Patagonia_sol de la tarde sobre el graciar Moreno_Sa.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-022_Patagonia_sol de la tarde sobre el graciar Moreno_Sa.jpg' alt='GLA-022_Patagonia_sol de la tarde sobre el graciar Moreno_Sa.jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-023_Patagonia_pequeño iceberg del glaciar Perito Moreno .jpg' title='GLA-023_Patagonia_pequeño iceberg del glaciar Perito Moreno .jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-023_Patagonia_pequeño iceberg del glaciar Perito Moreno .jpg' alt='GLA-023_Patagonia_pequeño iceberg del glaciar Perito Moreno .jpg'>
      </a>
      <a href='/images/collections/GLA_Glaciares/GLA-024_Patagonia_el glaciar Moreno desde la Curva de los Su.jpg' title='GLA-024_Patagonia_el glaciar Moreno desde la Curva de los Su.jpg'>
        <img src='/images/collections-thumbs/GLA/GLA-024_Patagonia_el glaciar Moreno desde la Curva de los Su.jpg' alt='GLA-024_Patagonia_el glaciar Moreno desde la Curva de los Su.jpg'>
      </a>
    </div>

<!-- / new links ! ----------------------------------------->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="http:/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http:/blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>

<!-- triggering the whole thing -->

    <script src="js/blueimp-gallery.min.js"></script>

    <script>
      document.getElementById('links').onclick = function (event) {
      event = event || window.event;
      var target = event.target || event.srcElement,
      link = target.src ? target.parentNode : target,
      options = {index: link, event: event},
      links = this.getElementsByTagName('a');
      blueimp.Gallery(links, options);
      };
    </script>

    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
