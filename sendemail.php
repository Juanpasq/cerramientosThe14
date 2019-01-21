<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Refresh" content="3;url=http://www.cerramientosthe14.com.ar">
<link rel="stylesheet" href="assets/css/main.css" />

<style type="text/css">
html, body, h4{ 
margin:0; 
padding:0;
height: 100%;
width: 100%;
text-align: center;
}
</style>

<title>Envio de consulta</title>
</head>

<body>
<div id="wrapper">

<!--mensaje enviado sin chequeo (queda centrado) -->
<h4><?php 
 echo "Mensaje enviado, nos estaremos contactando en la brevedad, muchas gracias por su consulta.";

/*no se por que los 2 redireccionamientos php no andan en este server, asi que redireccionamos con meta en header.*/

/*     header("refresh:3;url=contact-us.html");*/

/*header('Location: www.efic.com.ar/contact-us.html');*/?></h4>
<!-- FIN DE mensaje enviado sin chequeo (queda centrado) -->


<?php 


ini_set('sendmail_from','cerramientos.the14@gmail.com');
/* recogemos todos los campos html y los metemos en variable php */
$nombre = $_POST['nombre']; 
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$consulta = $_POST['consulta']; 

/* verifico el contenido de las variables*/

/*echo $nombre;
echo $email;
echo $consulta;
echo $telefono;*/


/*Datos y variables del mail*/
	  $para = 'cerramientos.the14@gmail.com'; /*YO, la empresa*/
	  $asunto = "Consulta desde WEB";
	  $cuerpo = "*Apellido y nombre: ".$nombre ."<br />"."*Telefono: ".$telefono. "<br />"."*Mail: ".$email. "<br />"."*Consulta: ".$consulta. "<br />"; 
	
	$headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Consulta de la WEB <cerramientos.the14@gmail.com\r\n";
    $headers .= "Reply-To: info@grupoefic.com.ar\r\n";
	  
/* Armado del cuerpo del*/	  
	  $mensaje = "///*** DATOS DEL INTERESADO ***///"."\r\n"; 
	  $mensaje .= "NOMBRE: " .$nombre."\r\n";
	  $mensaje .= "CORREO / TEL: " .$email."\r\n";
	  /*$mensaje .= "TELEFONO: " .$telefono."\r\n";*/
	  $mensaje .= "CONSULTA: " .$consulta."\r\n";
	 
	  
/* funcion mail*/	
  
	  mail($para,$asunto,$mensaje);
	    

	/*  echo "Datos envidados correctamente, recibira una respuesta en breve, muchas gracias";*/?>


<!--este mensaje se muestra si el mensaje fue exitoso (pero lo muestra abajo, mal visualmente) asi que lo comentamos o lo display none-->
<h4  style="visibility:hidden"><?php
 echo "Mensaje enviado, nos estaremos contactando en la brevedad, muchas gracias por su consulta.";

/*no se por que los 2 redireccionamientos php no andan en este server, asi que redireccionamos con meta en header.*/

/*     header("refresh:3;url=contact-us.html");*/

/*header('Location: www.efic.com.ar/contact-us.html');*/?></h4>
</body>
</html>