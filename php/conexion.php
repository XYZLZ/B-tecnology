<?php 


$conexion = mysqli_connect("localhost", "root", "");
$db = mysql_selectdb("registros", $conexion);
if (!$conexion) {
	echo 'Error al conectar a la base de datos';
}else{
	echo 'conectado a la base de datos';
}



 ?>





