document.addEventListener('DOMContentLoaded', aplicar);
	function aplicar(){
		//var DecoraNavidad= document.getElementById("DecoraNavidad");
		//var DecoraCumple= document.getElementById("DecoraCumple");
		function mostrar(){

   			var elemento = document.getElementById("formulario");

			elemento.style.visibility= "visible";
		}
		function Cerrar(){
			var cerrar= document.getElementById("formulario");
   			cerrar.style.visibility="hidden";
		}
		function mostrarsubmenu(identificador, estilo){
   			if(identificador=="DecoraBanderines"){alert('hola');
	   			var cerrar= document.getElementById(identificador);
	   			cerrar.style.visibility=estilo;
	   			DecoraNavidad.style.visibility="hidden";
	   			DecoraCumple.style.visibility="hidden";
   			}
   		}
		function ocultarsubmenu(){
   			var submenu = document.getElementById("DecoraPapel");
   			submenu.style.visibility="hidden";}
		function lili(){
   			/*document.addEventListener("click",cerrar);*/
   			//document.addEventListener("click", capturatop);
		}
	}
