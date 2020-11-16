$(document).ready(function(){
	//var cerrar=document.getElementById("close").addEventListener("click",cerrar_banner,false);
	//document.getElementById("cajabox").addEventListener("click",pintar,false);
	//var a=document.getElementById("cajabox").addEventListener("click",pintar,false);
	var botones_navegacion=document.getElementsByTagName("a");
	var botones_barra_lateral=document.getElementsByTagName("blockquote");
	var titulo=document.getElementsByTagName("title")[0];
	agregar_atributos();

	function agregar_atributos(){
	if (titulo.text == 'Inicio' || 'Historias'){
		switch (titulo.text){
			case 'Historias':
				$(botones_barra_lateral[0]).attr('id','ul_seleccionado');
				break;
				}
	}
	if(titulo.text == 'Registros' || 'Tablas'){
		switch (titulo.text){
			case 'Tablas':
				$(botones_barra_lateral[0]).attr('id','ul_seleccionado');
				break;
			case 'Buscar Por Filtro':
				$(botones_barra_lateral[1]).attr('id','ul_seleccionado');
				break;
				}
	}
	/*if (titulo.text == 'Contador'){
		$(botones_navegacion[2]).attr('id','ul_seleccionado');
	}
	if (titulo.text == 'Precios'){
		$(botones_navegacion[3]).attr('id','ul_seleccionado');
	}
	if (titulo.text == 'Config'){
		$(botones_navegacion[4]).attr('id','ul_seleccionado');
	}*/
	}





});

