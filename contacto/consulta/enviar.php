<?php
    $remitente = $_POST['Prueba php']; // Remitente
    $destinatario = 'brahimeduali@gmail.com'; // Destinatario.
    $asunto = 'Consulta página We Colour'; // Asunto
    if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Número: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Consulta sobre:: " . $_POST["tipoconsulta"] . "\r\n";
    $cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
    $cuerpo .= "Recibir notificaciones:: " . $_POST["recibirinfo"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
