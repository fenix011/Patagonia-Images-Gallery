<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <title>Patagonia Images |   Gente y Paisajes   </title>

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
    <link rel="stylesheet" href="css/blueimp-gallery.css">
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
<!-- ++ nuevos links ---------------------------------------->

    <div id='links'>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-001_Patagonia_Valle del Rio Azul_El Bolson_Rio Negro.jpg' title='01_Patagonia_Valle del Rio Azul_El Bolson_Rio Negro'>
        <img src='/images/collections-thumbs/GYP/GYP-001_Patagonia_Valle del Rio Azul_El Bolson_Rio Negro.jpg' alt='01_Patagonia_Valle del Rio Azul_El Bolson_Rio Negro'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-002_Patagonia_avistaje de ballenas_Puerto Piramides_Chub.jpg' title='02_Patagonia_avistaje de ballenas_Puerto Piramides_Chub'>
        <img src='/images/collections-thumbs/GYP/GYP-002_Patagonia_avistaje de ballenas_Puerto Piramides_Chub.jpg' alt='02_Patagonia_avistaje de ballenas_Puerto Piramides_Chub'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-003_Patagonia_bañistas cerca del Cajon del Azul_El Bolso.jpg' title='03_Patagonia_bañistas cerca del Cajon del Azul_El Bolso'>
        <img src='/images/collections-thumbs/GYP/GYP-003_Patagonia_bañistas cerca del Cajon del Azul_El Bolso.jpg' alt='03_Patagonia_bañistas cerca del Cajon del Azul_El Bolso'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-004_Patagonia_Cerro Campanario_Bariloche.jpg' title='04_Patagonia_Cerro Campanario_Bariloche'>
        <img src='/images/collections-thumbs/GYP/GYP-004_Patagonia_Cerro Campanario_Bariloche.jpg' alt='04_Patagonia_Cerro Campanario_Bariloche'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-005_Patagonia_Glaciar Spegazzini_Lago Argentino_Santa Cr.jpg' title='05_Patagonia_Glaciar Spegazzini_Lago Argentino_Santa Cr'>
        <img src='/images/collections-thumbs/GYP/GYP-005_Patagonia_Glaciar Spegazzini_Lago Argentino_Santa Cr.jpg' alt='05_Patagonia_Glaciar Spegazzini_Lago Argentino_Santa Cr'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-006_Patagonia_Punta Tombo_Chubut.jpg' title='06_Patagonia_Punta Tombo_Chubut'>
        <img src='/images/collections-thumbs/GYP/GYP-006_Patagonia_Punta Tombo_Chubut.jpg' alt='06_Patagonia_Punta Tombo_Chubut'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-007_Patagonia_En el filo del Cerro Lopez_Bariloche.jpg' title='07_Patagonia_En el filo del Cerro Lopez_Bariloche'>
        <img src='/images/collections-thumbs/GYP/GYP-007_Patagonia_En el filo del Cerro Lopez_Bariloche.jpg' alt='07_Patagonia_En el filo del Cerro Lopez_Bariloche'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-008_Patagonia_Playa Bonita_Bariloche.jpg' title='08_Patagonia_Playa Bonita_Bariloche'>
        <img src='/images/collections-thumbs/GYP/GYP-008_Patagonia_Playa Bonita_Bariloche.jpg' alt='08_Patagonia_Playa Bonita_Bariloche'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-009_Patagonia_navegacion en el Lago Puelo_Chubut.jpg' title='09_Patagonia_navegacion en el Lago Puelo_Chubut'>
        <img src='/images/collections-thumbs/GYP/GYP-009_Patagonia_navegacion en el Lago Puelo_Chubut.jpg' alt='09_Patagonia_navegacion en el Lago Puelo_Chubut'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-010_Patagonia_Cerro Campanario en invierno_Bariloche.jpg' title='10_Patagonia_Cerro Campanario en invierno_Bariloche'>
        <img src='/images/collections-thumbs/GYP/GYP-010_Patagonia_Cerro Campanario en invierno_Bariloche.jpg' alt='10_Patagonia_Cerro Campanario en invierno_Bariloche'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-011_Patagonia_El Campanario y confiteria_Bariloche en In.jpg' title='11_Patagonia_El Campanario y confiteria_Bariloche en In'>
        <img src='/images/collections-thumbs/GYP/GYP-011_Patagonia_El Campanario y confiteria_Bariloche en In.jpg' alt='11_Patagonia_El Campanario y confiteria_Bariloche en In'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-012_Patagonia_vista desde el Cerro Saturnino_El Bolson_C.jpg' title='12_Patagonia_vista desde el Cerro Saturnino_El Bolson_C'>
        <img src='/images/collections-thumbs/GYP/GYP-012_Patagonia_vista desde el Cerro Saturnino_El Bolson_C.jpg' alt='12_Patagonia_vista desde el Cerro Saturnino_El Bolson_C'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-013_Patagonia_el Fitz Roy desde la Laguna Capri_PN Los G.jpg' title='13_Patagonia_el Fitz Roy desde la Laguna Capri_PN Los G'>
        <img src='/images/collections-thumbs/GYP/GYP-013_Patagonia_el Fitz Roy desde la Laguna Capri_PN Los G.jpg' alt='13_Patagonia_el Fitz Roy desde la Laguna Capri_PN Los G'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-014_Patagonia_bañistas en el rio Azul_ Camping del Rio A.jpg' title='14_Patagonia_bañistas en el rio Azul_ Camping del Rio A'>
        <img src='/images/collections-thumbs/GYP/GYP-014_Patagonia_bañistas en el rio Azul_ Camping del Rio A.jpg' alt='14_Patagonia_bañistas en el rio Azul_ Camping del Rio A'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-015_Patagonia_pesca embarcada_Lago Quillen_Neuquen.jpg' title='15_Patagonia_pesca embarcada_Lago Quillen_Neuquen'>
        <img src='/images/collections-thumbs/GYP/GYP-015_Patagonia_pesca embarcada_Lago Quillen_Neuquen.jpg' alt='15_Patagonia_pesca embarcada_Lago Quillen_Neuquen'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-016_Patagonia_Portal Norte de entrada al PN Lanin_Neuque.jpg' title='16_Patagonia_Portal Norte de entrada al PN Lanin_Neuque'>
        <img src='/images/collections-thumbs/GYP/GYP-016_Patagonia_Portal Norte de entrada al PN Lanin_Neuque.jpg' alt='16_Patagonia_Portal Norte de entrada al PN Lanin_Neuque'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-017_Patagonia_kayaks de travesia_Lago Puelo_Chubut.jpg' title='17_Patagonia_kayaks de travesia_Lago Puelo_Chubut'>
        <img src='/images/collections-thumbs/GYP/GYP-017_Patagonia_kayaks de travesia_Lago Puelo_Chubut.jpg' alt='17_Patagonia_kayaks de travesia_Lago Puelo_Chubut'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-018_Patagonia_Land Rovers en el bosque_Rio Negro.jpg' title='18_Patagonia_Land Rovers en el bosque_Rio Negro'>
        <img src='/images/collections-thumbs/GYP/GYP-018_Patagonia_Land Rovers en el bosque_Rio Negro.jpg' alt='18_Patagonia_Land Rovers en el bosque_Rio Negro'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-019_Patagonia_Minitrekking sobre el glaciar Moreno_Santa.jpg' title='19_Patagonia_Minitrekking sobre el glaciar Moreno_Santa'>
        <img src='/images/collections-thumbs/GYP/GYP-019_Patagonia_Minitrekking sobre el glaciar Moreno_Santa.jpg' alt='19_Patagonia_Minitrekking sobre el glaciar Moreno_Santa'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-020_Patagonia_Muchachos disfrutando en el mirador del La.jpg' title='20_Patagonia_Muchachos disfrutando en el mirador del La'>
        <img src='/images/collections-thumbs/GYP/GYP-020_Patagonia_Muchachos disfrutando en el mirador del La.jpg' alt='20_Patagonia_Muchachos disfrutando en el mirador del La'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-021_Patagonia_rumbo al glaciar Upsala_Santa Cruz.jpg' title='21_Patagonia_rumbo al glaciar Upsala_Santa Cruz'>
        <img src='/images/collections-thumbs/GYP/GYP-021_Patagonia_rumbo al glaciar Upsala_Santa Cruz.jpg' alt='21_Patagonia_rumbo al glaciar Upsala_Santa Cruz'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-022_Patagonia_En el Punto Panoramico_Circuito Chico_Bari.jpg' title='22_Patagonia_En el Punto Panoramico_Circuito Chico_Bari'>
        <img src='/images/collections-thumbs/GYP/GYP-022_Patagonia_En el Punto Panoramico_Circuito Chico_Bari.jpg' alt='22_Patagonia_En el Punto Panoramico_Circuito Chico_Bari'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-023_Patagonia_cabalgata a orillas del mar_Punta Delgada_.jpg' title='23_Patagonia_cabalgata a orillas del mar_Punta Delgada_'>
        <img src='/images/collections-thumbs/GYP/GYP-023_Patagonia_cabalgata a orillas del mar_Punta Delgada_.jpg' alt='23_Patagonia_cabalgata a orillas del mar_Punta Delgada_'>
      </a>
      <a href='/images/collections/GYP_Gentes-y-Paisajes/GYP-024_Patagonia_Punta Tombo_Chubut.jpg' title='24_Patagonia_Punta Tombo_Chubut'>
        <img src='/images/collections-thumbs/GYP/GYP-024_Patagonia_Punta Tombo_Chubut.jpg' alt='24_Patagonia_Punta Tombo_Chubut'>
      </a>
    </div>

<!-- /new links ! ----------------------------------------->


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
