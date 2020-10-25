<?php 
$nombre = $_POST["nombre"]; 
$clave=$_POST['clave']; 


//conectar a la base de datos 
$conectar=mysqli_connect("localhost", "root", "", "registros");
$consulta="SELECT * FROM nombre='$nombre' and clave='$clave'";
$finaliza=mysqli_query($conectar, $consulta);

$filas=mysqli_num_rows($finaliza);

if ($filas>0) {
	header("location:index.html");
}else{
	echo "Error en la autoidentificacion";
}


mysqli_free_result($finaliza);
msqli_close($conectar);




 ?>