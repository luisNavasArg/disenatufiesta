document.addEventListener('DOMContentLoaded', principal);
	function principal(){

	}
	function mostrar(){
		var elemento = document.getElementById("formulario");
	  	elemento.style.visibility= "visible";
	}
	function Cerrar(){
		var cerrar= document.getElementById("formulario");
	   	cerrar.style.visibility="hidden";
	}
	
	function muestra(ide,ide2){
		var anade = document.getElementById(ide);
		anade.classList.add('muestra');
		var anade2 = document.getElementById(ide2);
		anade2.classList.add('muestra');
	}
	function ocultarVarios(ident){
		if(ident=='cp'){
			oculta('db1');
			oculta('db2');
			oculta('nv1');
			oculta('nv2');
			oculta('cl1');
			oculta('cl2');
			oculta('vi1');
			oculta('vi2');
			oculta('mt1');
			oculta('mt2');
		} else if(ident=='db'){
			oculta('cp1');
			oculta('cp2');
			oculta('nv1');
			oculta('nv2');
			oculta('cl1');
			oculta('cl2');
			oculta('vi1');
			oculta('vi2');
			oculta('mt1');
			oculta('mt2');
		} else if(ident=='nv'){
			oculta('db1');
			oculta('db2');
			oculta('cp1');
			oculta('cp2');
			oculta('cl1');
			oculta('cl2');
			oculta('vi1');
			oculta('vi2');
			oculta('mt1');
			oculta('mt2');
		} else if (ident=='cl'){
			oculta('db1');
			oculta('db2');
			oculta('cp1');
			oculta('cp2');
			oculta('nv1');
			oculta('nv2');
			oculta('vi1');
			oculta('vi2');
			oculta('mt1');
			oculta('mt2');
		}else if (ident=='vi'){
			oculta('db1');
			oculta('db2');
			oculta('cp1');
			oculta('cp2');
			oculta('nv1');
			oculta('nv2');
			oculta('cl1');
			oculta('cl2');
			oculta('mt1');
			oculta('mt2');
		}else if (ident=='mt'){
			oculta('db1');
			oculta('db2');
			oculta('cp1');
			oculta('cp2');
			oculta('nv1');
			oculta('nv2');
			oculta('cl1');
			oculta('cl2');
			oculta('vi1');
			oculta('vi2');
		}else if (ident=='ct'){
			oculta('db1');
			oculta('db2');
			oculta('cp1');
			oculta('cp2');
			oculta('nv1');
			oculta('nv2');
			oculta('cl1');
			oculta('cl2');
			oculta('vi1');
			oculta('vi2');
			oculta('mt1');
			oculta('mt2');
		}
	}
	function oculta(id){
		var ocul = document.getElementById(id);
		ocul.classList.remove('muestra');
	}

