let animado = document.querySelectorAll(".animado");
function mostrarScroll(){
	let scrollTop = document.documentElement.scrollTop;
	for (var a=0; a < animado.length; a++) {
		let alturaAnimado = animado[a].offsetTop;
		if (alturaAnimado < scrollTop){
			animado[a].style.opacity = 1;
			animado[a].classList.add("mostrarIzquierda");
		}
	}
}






window.addEventListener('scroll', mostrarScroll);