<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];
$para = 'info@nicolasghilardi.com.ar';
$header = "From: info@nicolasghilardi.com.ar\nReply-to:".$_POST["email"]."\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$titulo = "Contacto Web: " .$nombre ;
$msjCorreo = " Nombre: $nombre\n E-mail: $email\n Mensaje: $mensaje\n ";
$msjCorreo .= "Enviado el " . date('l jS \of F Y h:i:s A');

if ($_POST) {
    if (mail ( $para, $titulo, $msjCorreo, $header)){
        echo "<script language='javascript>
        alert('Muchas Gracias!.');
        window.location.href = 'https://www.yacomecsa.com.ar';
        </script>";
    } else {
        header("Location: https://www.yacomecsa.com.ar");
    }
}
?>
