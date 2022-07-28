<?php require_once 'controllers_motivos/c2.php'; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" id="hello-elementor-css" href="https://pruebabre.azurefd.net/wp-content/themes/hello-elementor/style.min.css?ver=2.5.0" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-24795-css" href="https://pruebabre.azurefd.net/wp-content/uploads/elementor/css/post-24795.css?ver=1656955234" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-child-style-css" href="https://pruebabre.azurefd.net/wp-content/themes/hello-theme-child-master/style.css?ver=1.0.0" type="text/css" media="all">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <title>Formulario_ZRGA</title>
    </head>
    
    <body>
    
      


              <?php if(count($errors)>0):?>
                <div class="alert alert-danger">
                <?php foreach($errors as $error):?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
                  </div>
                  <?php endif; ?>
                
                  <?php if(count($Ticket)>0):?>
                <div class="alert alert-success" role="alert">
                <?php foreach($Ticket as $Ticket):?>
                <li><?php echo $Ticket; ?></li>
                <?php endforeach; ?>
                  </div>
                  <?php endif; ?>


<section class="elementor-section elementor-top-section elementor-element elementor-element-d5947a3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d5947a3" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ffaf85" data-id="6ffaf85" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-cda6c3d elementor-widget elementor-widget-shortcode" data-id="cda6c3d" data-element_type="widget" data-widget_type="shortcode.default">
<div class="elementor-widget-container">
<div class="elementor-shortcode"><div role="form" class="wpcf7" id="wpcf7-f24659-p24660-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>

<form action="ZRGA.php" method="post">
  <p><label> Motivo de tu comunicación<br>
  <span class="wpcf7-form-control-wrap" data-name="Motivodetucomunicacin">
  <select name="Motivodetucomunicacin" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option>
  <option value="Información">Información</option>
  <option value="Sugerencia">Sugerencia</option>
  <option value="Queja">Queja</option>
  <option value="Comentario positivo">Comentario positivo</option></select></span><br>
  </label></p>
	<p><label> Nombre <span>*</span><br>
		<span class="wpcf7-form-control-wrap" data-name="nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
	<p><label> Primer apellido <span>*</span><br>
		<span class="wpcf7-form-control-wrap" data-name="apellido1"><input type="text" name="apellido1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
	<p><label> Segundo apellido <span>*</span><br>
		<span class="wpcf7-form-control-wrap" data-name="apellido2"><input type="text" name="apellido2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
	<p><label> Email <span>*</span><br>
		<span class="wpcf7-form-control-wrap" data-name="email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
	<p><label> Asunto <span>*</span><br>
		<span class="wpcf7-form-control-wrap" data-name="asunto"><textarea name="asunto" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
	<p><span class="wpcf7-form-control-wrap" data-name="acceptance-636"><span class="wpcf7-form-control wpcf7-acceptance optional"><span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-636" value="1" aria-invalid="false"><span class="wpcf7-list-item-label">He leído y acepto el <a href="http://cem.westus.cloudapp.azure.com/avisos-de-privacidad/"> Aviso de Privacidad </a></span></label></span></span></span> </p>
	<p><input type="submit" name="formu_zrga" value="Enviar formulario" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
	<div class="wpcf7-response-output" aria-hidden="true"></div>


  </form>
</div>
</div>
</div>
          
          
    </body>
    </html>
