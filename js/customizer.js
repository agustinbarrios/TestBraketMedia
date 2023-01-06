/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */


// Seleccionamos el texto
let texto = document.querySelector("h2");

// Generamos el array con los caracteres
let textoArray = texto.innerHTML.split("");

// Creamos la variable para guardar el texto
let textoSecuencia = "";

// Agregamos el intervalo
let intervalo = setInterval(function(){
	// Si el array tiene algo, seguimos
	if (textoArray.length > 0) {
		// Sacamos el último caracter
		textoSecuencia += textoArray.shift();
		// Agregamos el caracter al texto del DOM
		texto.innerHTML = textoSecuencia;
	} else {
		// Si el array está vacío, limpiamos el intervalo
		clearInterval(intervalo);
	}
}, 170);