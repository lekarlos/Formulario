<?php


$errors = array();
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
$patron_correo="/^[a-zA-Z0-9._áéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+[@]+[a-zA-Z]+[.]+[a-zA-Z]+$/";
$aMensajes = array();
$Ticket = array();
$nombre="";
$email ="";




if (isset($_POST['formu_zrga'])) {
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $apellido1 = $_POST['apellido1'];
   $apellido2 = $_POST['apellido2'];

   // validation
   if( empty($_POST['Motivodetucomunicacin']) ){
      $errors[] = "Debe especificar el Motivo";
   
    }
          
      else
      {
          // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
           if( preg_match($patron_texto, $_POST['Motivodetucomunicacin']) ){
         $aMensajes[] = "Motivodetucomunicacin: [".$_POST['Motivodetucomunicacin']."]";
         
       }else{
         $errors[] = "El motivo sólo puede contener letras y espacios";
         
       }
              
   }
      // nombre
       if( empty($_POST['nombre']) ){
      $errors[] = "Debe especificar el nombre";
      
    }
          
      else
      {
          // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
           if( preg_match($patron_texto, $_POST['nombre']) ){
         $aMensajes[] = "Nombre: [".$_POST['nombre']."]";
         
       }else{
         $errors[] = "El nombre sólo puede contener letras y espacios";
         
       }
              
   }
   //apellido1
   if( empty($_POST['apellido1']) )
   $errors[] = "Debe especificar apellido paterno";
else
{
   // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
   if( preg_match($patron_texto, $_POST['apellido1']) )
      $aMensajes[] = "Apellidos: [".$_POST['apellido1']."]";
   else
      $errors[] = "Los apellidos sólo pueden contener letras y espacios";
}

   //apellido2
   if( empty($_POST['apellido2']) )
   $errors[] = "Debe especificar apellido materno";
else
{
   // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
   if( preg_match($patron_texto, $_POST['apellido2']) )
      $aMensajes[] = "Apellidos: [".$_POST['apellido2']."]";
   else
      $errors[] = "Los apellidos sólo pueden contener letras y espacios";
}
//correo
   
   if( empty($_POST['email']) )
   $errors[] = "Debe especificar el email";
else
{
   // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $aMensajes[] = "Correo: [".$_POST['email']."]";
 }
 else{
    $errors[] = "El correo no esta redactado bien";
 }
}
//asunto
if( empty($_POST['asunto']) ){
   $errors[] = "Debe especificar el asunto";
   
 }
   
else
{
   // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
    if( preg_match($patron_texto, $_POST['asunto']) ){
      $aMensajes[] = "Asunto: [".$_POST['asunto']."]";
      
    }else{
      $errors[] = "El asunto sólo puede contener letras y espacios";
      
    }
      
}
if( empty($_POST['acceptance-636']) ){
   $errors[] = "Debe aceptar los terminos y condiciones";
   
 }
     if (count($errors) === 0) {
     //sin errores
     $Ticket[] = "Tu ticket es ".peticion()." en breve lo atenderemos";
     //peticion();

     }

   }


   















function peticion(){
    $Motivo=$_POST['Motivodetucomunicacin'];
    $Ma="";//Motivo actualizado
    switch($Motivo){
        case "Información":
            $Ma="GANA-IN";
            break;
        case "Sugerencia":
            $Ma="GANA-SUG";
            break;
        case "Queja":
            $Ma="GANA-QU";
            break;
        case "Comentario positivo":
            $Ma="GANA-COM";
            break;
    }
	$datos=array(
		'Motivo_comunicacion' => $Ma,
		'Nombre'   => htmlentities($_POST['nombre']),
		'Apellido_paterno' => htmlentities($_POST['apellido1']),
		'Apellido_materno' => htmlentities($_POST['apellido2']),
		'Email'    => htmlentities($_POST['email']),
		'Asunto' => $_POST['asunto'],
		'Unidad_negocio' => 'ZRGA',
	);
	$username = 'S0023952345';
	$password = 'Septiembre.2021';
	
	$site_url = 'https://televia.it-cpi003-rt.cfapps.us10.hana.ondemand.com/http/ServiceTicketCreateAPI';
	$json = json_encode($datos);
	
	$keypair = $username . ":" . $password;
	$curl=curl_init();
	$header = array('Content-Type: application/json','Content-Length: ' . strlen($json));

	curl_setopt($curl,CURLOPT_URL,$site_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_USERPWD, $keypair);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	
	
	$response = curl_exec($curl);
	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$obj = json_decode($json);
	
	curl_close($curl);

	$texto=json_decode($response, true);
	
	

	$tam=strlen($response);
	$final=strpos($response,"<d:TicketID>");
	

   return substr($response,$final+12,5);
	
   
	  
	// Function call
	//function_alert(substr($response,$final+12,4));
}
	
	
	

	
