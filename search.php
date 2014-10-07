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

    <!-- tipue search -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="tipuesearch/tipuesearch_content.js"></script>
    <link href="tipuesearch/tipuesearch.css" rel="stylesheet">
    <script src="tipuesearch/tipuesearch_set.js"></script>
    <script src="tipuesearch/tipuesearch.js"></script>

    <!-- / tipue search -->

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
        background-color: rgba(50, 50, 50,.2);

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
		<div class="col-md-1"></div>
		<div class="col-md-9">
		  <div id="content">

   <!-- main content: tipue search results:  -->
		    <div id="tipue_search_content"></div>
   <!-- /tipue ...-->
                  <div class="col-md-2"></div>
	          </div>
		</div>
	      </div>


  <!-- tipue serch  script -->

<script>
    $(document).ready(function() {
         $('#tipue_search_input').tipuesearch({
              'mode': 'json',
              'contentLocation': 'tipuesearch/tipuesearch_content.json'
         });
    });
</script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
