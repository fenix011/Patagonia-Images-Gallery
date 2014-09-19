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

 <!--++  here goes new links: AMR gallery. -->

   <div id='links'>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-001_Patagonia_Gaviotas de Olrog_Chubut.jpg' title='AMR-001_Patagonia_Gaviotas de Olrog_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-001_Patagonia_Gaviotas de Olrog_Chubut.jpg' alt='AMR-001_Patagonia_Gaviotas de Olrog_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-002_Patagonia_Gaviotas Cocineras_Chubut.jpg' title='AMR-002_Patagonia_Gaviotas Cocineras_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-002_Patagonia_Gaviotas Cocineras_Chubut.jpg' alt='AMR-002_Patagonia_Gaviotas Cocineras_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-003_Patagonia_Cormoranes nidificando_Punta Loma_Chubut.jpg' title='AMR-003_Patagonia_Cormoranes nidificando_Punta Loma_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-003_Patagonia_Cormoranes nidificando_Punta Loma_Chubut.jpg' alt='AMR-003_Patagonia_Cormoranes nidificando_Punta Loma_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-004_Patagonia_Bandada de Gaviotas Cocineras_Santa Cruz.jpg' title='AMR-004_Patagonia_Bandada de Gaviotas Cocineras_Santa Cruz.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-004_Patagonia_Bandada de Gaviotas Cocineras_Santa Cruz.jpg' alt='AMR-004_Patagonia_Bandada de Gaviotas Cocineras_Santa Cruz.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-007_Patagonia_Golondrinas_grupo_Chubut.jpg' title='AMR-007_Patagonia_Golondrinas_grupo_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-007_Patagonia_Golondrinas_grupo_Chubut.jpg' alt='AMR-007_Patagonia_Golondrinas_grupo_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-009_Patagonia_golondrina_Chubut.jpg' title='AMR-009_Patagonia_golondrina_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-009_Patagonia_golondrina_Chubut.jpg' alt='AMR-009_Patagonia_golondrina_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR_010_Patagonia_Colonia de Cormoranes Bigua_Caleta Malaspi.jpg' title='AMR_010_Patagonia_Colonia de Cormoranes Bigua_Caleta Malaspi.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR_010_Patagonia_Colonia de Cormoranes Bigua_Caleta Malaspi.jpg' alt='AMR_010_Patagonia_Colonia de Cormoranes Bigua_Caleta Malaspi.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-011_Patagonia_Gaviotas Cocineras_Punta Tombo_Chubut.jpg' title='AMR-011_Patagonia_Gaviotas Cocineras_Punta Tombo_Chubut.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-011_Patagonia_Gaviotas Cocineras_Punta Tombo_Chubut.jpg' alt='AMR-011_Patagonia_Gaviotas Cocineras_Punta Tombo_Chubut.jpg'>
      </a>
      <a href='/images/collections/AMR_Aves-Marinas/AMR-012_Patagonia_Gaviotas Cangrejeras o de Orlog_Caleta Mal.jpg' title='AMR-012_Patagonia_Gaviotas Cangrejeras o de Orlog_Caleta Mal.jpg'>
        <img src='/images/collections-miniaturas/AMR/AMR-012_Patagonia_Gaviotas Cangrejeras o de Orlog_Caleta Mal.jpg' alt='AMR-012_Patagonia_Gaviotas Cangrejeras o de Orlog_Caleta Mal.jpg'>
      </a>
    </div>

 	     <!-- here goes main-content.php comp. -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
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
