<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A contact form using the Bootstrap 3 framework.">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../components/ico/favicon.png">
    <title>Patagonia Images | Contacta</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="components/vender/intl-tel-input/css/intlTelInput.css">
    <!-- EXTRACT ADDITIONAL STYLING HERE =======> -->
    <style>
      .container {
        width: auto;
        max-width: 800px;
      }
      .form-group {
        margin-bottom: 8px;
      }
      #feedbackForm {
        font-size: 12px;
      }
    </style>
    <!-- <======= UP TO HERE -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="components/vender/bootstrap/components/js/html5shiv.js"></script>
      <script src="components/vender/bootstrap/components/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- EXTRACT FORM HERE =======> -->
    <div class="container">
      <div id="contact_form" class="row">
        <div class="col-12 col-sm-12 col-lg-12">
          <h2>Dinos lo que piensas...</h2>
          <p>En Patagonia-Images apreciamos cualquier tipo de realimentación en relación la experiencia de navegación en el sitio web, así como relacionada con sus contenidos (imágenes, videos...) o consulta de cualquier otra naturaleza. Por favor, rellena los campos a continuación y nos pondremos en contacto lo antes posible.</p>
          <form role="form" id="feedbackForm">
            <div class="form-group has-feedback">
              <label class="control-label" for="name">Nombre</label>
              <input type="text" class="form-control input-sm" id="name" name="name" placeholder="Introduzca su nombre" />
              <span class="help-block" style="display: none;">Por favor introduzca su nombre.</span>
            </div>
            <!-- UNCOMMENT HERE IF YOU WANT TITLE, COMPANY AND WEBSITE FIELDS - you must also uncomment values in $fields_req in sendmail.php
            <div class="form-group">
              <label class="control-label" for="title">Title</label>
              <input type="text" class="form-control input-sm optional" id="title" name="title" />
            </div>
            <div class="form-group">
              <label class="control-label" for="company">Company</label>
              <input type="text" class="form-control input-sm optional" id="company" name="company" />
            </div>
            <div class="form-group">
              <label class="control-label" for="website">Website</label>
              <input type="url" class="form-control input-sm optional" id="website" name="website" />
            </div>
            -->
            <!--<div class="form-group has-feedback">
              <label class="control-label" for="phone">Phone</label>
              <input type="tel" class="form-control input-sm optional" id="phone" name="phone" placeholder="Enter your phone (Optional)"/>
              <span class="help-block" style="display: none;">Please enter a valid phone number.</span>
            </div>-->
            <div class="form-group has-feedback">
              <label class="control-label" for="email">Dirección Email</label>
              <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Introduzca su e-mail" />
              <span class="help-block" style="display: none;">Por favor, introduzca una dirección  e-mail válida.</span>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label" for="message">Mensaje*</label>
              <textarea rows="5" cols="30" class="form-control input-sm" id="message" name="message" placeholder="Introduzca su mensaje" ></textarea>
              <span class="help-block" style="display: none;">Por favor, introduzca su mensaje.</span>
            </div>
            <img id="captcha" src="library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-info btn-sm">Mostrar Otra Imagen</a><br/>
            <div class="form-group has-feedback" style="margin-top: 10px;">
              <label class="control-label" for="captcha_code">Texto en la Imagen</label>
              <input type="text" class="form-control input-sm" name="captcha_code" id="captcha_code" placeholder="Por seguridad, por favor introduzca el código mostrado en el cuadro." />
              <span class="help-block" style="display: none;">Por favor introduzca el código mostrado en la imagen.</span>
            </div>
            <span class="help-block" style="display: none;">Por favor introduzca el código de seguridad.</span>
            <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" data-loading-text="Enviando..." style="display: block; margin-top: 10px;">Enviar</button>
          </form>
        </div><!--/span-->
      </div><!--/row-->
      <hr>
    </div><!--/.container-->
    <!-- <======= UP TO HERE -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="components/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="components/js/contact-form.js"></script>
  </body>
</html>
