
<?php

// Page0 Items
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];

$question5 = $_POST["question5"];
$question6 = $_POST["question6"];
$question7 = $_POST["question7"];
$question8 = $_POST["question8"];

// Page1 Items 
$nombre       = $_POST["nombre"]; 
$apellidos    = $_POST["apellidos"]; 
$telefono     = $_POST["telefono"]; 
$direccion    = $_POST["direccion"];
 
$codigo       = $_POST["codigo"];
$poblacion    = $_POST["poblacion"]; 
$email        = $_POST["email"]; 
$doubts       = $_POST["doubts"]; 
$contact_type = $_POST["contact_type"]; 



//se incluyen las variables del form en el mensaje 
$mensaje = "NOMBRE:". $nombre ."\n"; 
$mensaje .= "APELLIDOS: ".$apellidos." \n"; 
$mensaje .= "TELEFONO:".$telefono." \n"; 
$mensaje .= "DIRECCION:".$direccion." \n"; 
$mensaje .= "CODIGO POSTAL:".$codigo." \n"; 
$mensaje .= "POBLACION:".$poblacion." \n"; 
$mensaje .= "EMAIL:".$email." \n"; 
$mensaje .= "DESCRIPCION:".$descripcion." \n"; 
$mensaje .= "HORARIO RECOGIDA:".$horario." \n";
$mensaje .= "\n";

$mensaje .= "QUESTION1:".$question1."\n";
$mensaje .= "QUESTION2:".$question2."\n";
$mensaje .= "QUESTION3:".$question3."\n";
$mensaje .= "QUESTION4:".$question4."\n";

$mensaje .= "QUESTION5:".$question5."\n";
$mensaje .= "QUESTION6:".$question6."\n";
$mensaje .= "QUESTION7:".$question7."\n";
$mensaje .= "QUESTION8:".$question8."\n";
$mensaje .= "\n";



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


// Page for log
echo ("<center><b><font size='5' color='#000000' face='Arial'>");

echo ("<p>Question1:".$question1."</p>");
echo ("<p>Question2:".$question2."</p>");
echo ("<p>Question3:".$question3."</p>");
echo ("<p>Question4:".$question4."</p>");
echo ("<p>Question5:".$question5."</p>");
echo ("<p>Question6:".$question6."</p>");
echo ("<p>Question7:".$question7."</p>");
echo ("<p>Question8:".$question8."</p>");

echo ("<p>Nombre:".$nombre."</p>");
echo ("<p>Apellidos:".$apellidos."</p>");
echo ("<p>Telefono:".$telefono."</p>");
echo ("<p>direccion:".$direccion."</p>");
echo ("<p>codigo:".$codigo."</p>");
echo ("<p>poblacion:".$poblacion."</p>");
echo ("<p>email:".$email."</p>");
echo ("<p>doubts:".$doubts."</p>");
echo ("<p>contact_type:".$contact_type."</p>");

echo ("</b></font></center>")


// Send the email
if (mail($destino,$origen,$cuerpo,$cabeceras)) 
{ 
	echo header( 'Location: ok.php' ) ;
} else { 
	echo ("ERROR!!. PORFAVOR, SOLICITA TU RECOGIDA POR WhatsApp o Mail."); 
} 

?> 
