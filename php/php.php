<?php 
  $destino= "benjaminviolavaldez@gmail.com";
  $nombre = $_post["nombre"];
  $correo = $_post["correo"];
  $telefono = $_post["telefono"];
  $mensaje = $_post["mensaje"];
  $contenido = "nombre: " . $nombre . "\ncorreo: " . $correo . "\ntelefono: " $telefono . "\nmensaje: " . $mensaje;

mail($destino, "contaco", $contenido);
header("location:gracias.html");
 ?>







