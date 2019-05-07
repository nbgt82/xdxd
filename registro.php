<?php
 $destino= "alexxytb19@gmail.com";
 $nombre = $_POST["nombre"];
 $correo = $_POST["correo"];
 $mensaje = $_POST["message"];
 $contenido= "Nombre: " . $nombre . "\nCorreo : ". $correo . "\nMensaje : " .$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location:gracias.html");

?>
