<?php 
include'conexion.php';
// Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
// consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, correo, clave) VALUES ('$nombre', '$correo', '$clave')";


//verificar usuarios repetidos
$verificar_usuario = msqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$nombre'");
if (msqli_num_rows($verificar_usuario) > 0) {
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

$verificar_correo = msqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (msqli_num_rows($verificar_correo) > 0) {
	echo '<script>
	alert("El correo ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}



//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'error al registrarse';
}else{
	header("location:login.html");
}

//cerrar conexion
mysqli_close($conexion)


 ?>