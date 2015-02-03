
<?php

//se mandan a llamar las variables con metodo POST 
$nombre = $_POST["nombre"]; 
$apellidos = $_POST["apellidos"]; 
$telefono = $_POST["telefono"]; 
$direccion = $_POST["direccion"]; 
$codigo = $_POST["codigo"];
$poblacion = $_POST["poblacion"]; 
$email = $_POST["email"]; 
$descripcion = $_POST["descripcion"]; 
$horario = $_POST["horario"]; 


//se incluyen las variables del form en el mensaje 
$mensaje ="NOMBRE:". $nombre ."\n"; 
$mensaje .="APELLIDOS: ".$apellidos." \n"; 
$mensaje .="TELEFONO:".$telefono." \n"; 
$mensaje .="DIRECCION:".$direccion." \n"; 
$mensaje .="CODIGO POSTAL:".$codigo." \n"; 
$mensaje .="POBLACION:".$poblacion." \n"; 
$mensaje .="EMAIL:".$email." \n"; 
$mensaje .="DESCRIPCION:".$descripcion." \n"; 
$mensaje .="HORARIO RECOGIDA:".$horario." \n"; 

$cabeceras = "From:	".$email."\n";

$body_top = "--Message-Boundary\n"; 
$body_top .= "Content-type: text/plain;charset=US-ASCII\n"; 
$body_top .= "Content-transfer-encoding: 7BIT\n"; 
$body_top .= "Content-description: Mail messagebody\n\n"; 
$cuerpo = $mensaje; 

//cuenta de correo a donde quieren q llegue el formulario 
//$destino = "lisonkite@lisonkite.com"; 
$destino = "sergi@localhost";
$origen = $email;


echo ("<center><b><font size='5' color='#000000' face='Arial'>");


if (mail($destino,$origen,$cuerpo,$cabeceras)) 
{ 
//echo header( 'Location: http://lisonkite.com/ok.html' ) ;
echo header( 'Location: ok.php' ) ;
} else { 
echo ("ERROR!!. PORFAVOR, SOLICITA TU RECOGIDA POR WhatsApp o Mail."); 
} 

?> 
