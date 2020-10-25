function validar() {
	var = nombre, correo, clave, expresion;
	nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	clave = document.getElementById("clave").value;

	expresion = /\w+@\w+\.+[a-z]/;


	if (nombre === "" || correo === "" || clave === "") {
		alert("Todos los campos son obligatorios"); 
		return false;
	}
	else if (nombre.length>30) {
		alert("El nombre es muy largo");
		return false;
	}
	else if (correo.length>80) {
		alert("El correo es muy largo");
		return false;
	}

	else if (expresion.test(correo)) {
		alert("El correo no es válido");
	}

	else if (clave.length>30) {
		alert("La contraseña debe tener un maximo de 30 caracteres");
		return false;
	}

}

