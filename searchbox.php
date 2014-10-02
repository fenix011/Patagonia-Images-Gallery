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
    <link rel="stylesheet" href="css/style.css">

    <!-- tipue search style -->
    <link href="components/tipuesearch/tipuesearch.css" rel="stylesheet">


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
        background-color: #4e9258;
        background-size: cover;
        background-repeat:no-repeatdisplay: compact;
      }

      [class*="col-"] {
        background-color: rgba(86, 61, 124, 0.0);
        border: 1px solid rgba(86, 61, 124, 0.0);
        padding-bottom: 15px;
        padding-top: 15px;
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

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">

	      <div class="row">
		<div class="col-md-7"></div>
		<div class="col-md-3">
		  <div id="content">
		    <h2>La divulgación de la naturaleza es mi Misión</h2>
           <p>La Naturaleza ha sido la fuente de inspiración de artistas y científicos de todos los tiempos.</p> 
           <p>Sin embargo, en estos dos últimos siglos hemos vivido de espaldas a la Naturaleza. Debido al formidable desarrollo de la tecnología, el crecimiento de las ciudades y el vaciamiento de los campos, nos cuesta entender que pertenecemos a ella, en una intrincada red, vital para nuestra supervivencia como especie.La Naturaleza nos alimenta, nos abriga y nos inspira. </p>
	   <p>Podemos amar y proteger, solo aquello que conocemos.</p> 
	   <p>Por esto, mi Misión es contribuir a la preservación de la Naturaleza y de la Patagonia, mediante la publicación  de estas imágenes ante grandes audiencias.</p>
    <p><a class="btn" href="collections-index.php">Ir a Galerías... »</a></p>

	          </div>
		</div>
		<div class="col-md-2">

<!-- tipue serch box form -->
                    <form action="search.php">
                      <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
                    </form>
<!-- /tipue ...-->

                  </div>
		</div>
	      </div>




	      <!-- here goes main-content.php comp. -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
