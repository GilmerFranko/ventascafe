$(document).ready(function(){
	//var cerrar=document.getElementById("close").addEventListener("click",cerrar_banner,false);
	//document.getElementById("cajabox").addEventListener("click",pintar,false);
	//var a=document.getElementById("cajabox").addEventListener("click",pintar,false);
	$("#enviar").on("click", mostrar_editar);

	$("#volver").click(volver);
});
	function mostrar_editar(e){
		$("#editar").fadeToggle(500);
		$("#tabla").hide();

		$(document).keyup(function(e){
    		if(e.which==27) {
        	$("#editar").hide();
        	$("#tabla").show();

        	}
        });
	
	}
	function volver(){
		$("#editar").fadeToggle(500);
		$("#tabla").show();

	}

