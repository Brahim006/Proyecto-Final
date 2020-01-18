<?php
/* Set e-mail recipient */
$myemail  = "brahimeduali@gmail.com";

$ip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

// Tomar datos del formulario, segun los campos, que deben coincidir con lo q tenemos en contacto.html
$subject = "Consulta We Coulor Estilistas.";

// Los campos
$nombre = $_REQUEST['tfnombre'] ;
$email = $_REQUEST['tfemail'] ;
$telefono = $_REQUEST['tftelefono'];
$tipo_consulta = $_REQUEST['cbtipocons'];
$consulta = $_REQUEST['consulta'] ; 
$recibir_info = $_REQUEST['labelcheck'];

/* Poner que información aparecerá en el email, veran que toma las variables depende lo que configuramos mas arriba */
$message = "Consulta desde la página de We Coulour Estilistas:

Nombre: $nombre
E-Mail: $email
Número de teléfono: $telefono
Consulta sobre: $tipo_consulta
Desea recibir info: $recibir_info

Consulta:
 $consulta

";

// El resto dejarlo como está!
//direcci&oacute;n del remitente 
$headers = "From: $nombre <$email>\r\n"; 

//direcci&oacute;n de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: $email\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: $email\r\n"; 

/* Send the message using mail() function */
// mail($myemail, "Presupuesto solicitado desde SantiagoAV", $message, $headers);
mail($myemail, $subject, $message, $headers);

/* Acá podemos modificar que una vez enviado el mail, ir a otro html, por ej de gracias */
header('Location: confirma.html');
exit();