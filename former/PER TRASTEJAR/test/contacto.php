<?php
02
///////Configuración///// 
03
$mail_destinatario = 'lisonkite@lisonkite.com'; 
04
///////Fin configuración// 
05
 
06
if (isset ($_POST['enviar'])) { 
07
$headers .= "From: ".$_POST['email']. "rn"; 
08
if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellidos : ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '<p>Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros</p>'; 
09
 
10
else echo '<p>Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.</p>'; } 
11
 
12
echo '<form action="?" method="post"> <label for="nombre">Nombre y apellidos : </label>  
13
<input type="text" name="nombre" size="50" maxlength="80"><br> <label for="email">Email : </label>  <input type="text" name="email" size="50" maxlength="60"><br> <label for="asunto">Asunto : </label>  <input type="text" name="asunto" size="50" maxlength="60"><br> <label for="mensaje">Mensaje : </label>  <textarea name="mensaje" cols="31" rows="5"></textarea> <br> 
14
<label for="enviar"> <input type="submit" name="enviar" value="Enviar consulta"></label>
15
 </form><p> </p><p><br>';
16
?>
17
</p>