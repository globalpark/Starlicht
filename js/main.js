$(document).ready( function(){
	actualiza();
	proyectos();
} );

$(window).resize( function(){
	actualiza();
	proyectos();
} );

function actualiza(){

		width = $(window).width();
		height = $(window).height();

		//Actualiza el contenedor
		$('#page-container').css("margin-top", "0px");
		$('#page-container').offset({top: height});

		//Foto de Intro del tamaño de la pantalla
		$('#foto-intro').height( height - $('#main-nav').height() - 42 );

		//Ajusta logo a la mitad de la pantalla
		$('#logo-intro').css("margin-top", (height - $('#logo-intro').height())/2 + "px" );

		//Ajusta Quienes Somos
		if( height < 740){
			$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .1 + "px")
		}else{
			$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .6 + "px")
		}

		//Overlay con el texto de las marcas.
		$('.marca').mouseenter( function(){
			$(this).children().children('.texto-marca').removeClass('hidden');
		}).mouseleave( function(){
			$(this).children().children('.texto-marca').addClass('hidden');
		});

		//-----AJUSTES DE TAMAÑO (por si la cagué con algún ajuste) ----//
		
		//$('.proyecto').height( height - ( $('#main-nav').height() + $('#proyectos-nav').height() ) - 42 );

		if( $('#foto-intro').height() < $('#container-quienes').height() ){
			$('#foto-intro').height( $('#container-quienes').height()*1.2 );
		}

		if( ($('.texto-marca').height() + $('.titulo-marca').height()) > $('.marca').height() ){
			$('.marca').height( $('.titulo-marca').height() + $('.texto-marca').height() );
		}else{
			$('.texto-marca').height( ( $('.marca').height() - $('.titulo-marca').height() ) );
		}
		
		//Enable Local Scroll
		$('#entrar').localScroll({ duration: 'slow', offset: 0});
		$('#main-nav').localScroll({ duration: 'slow', offset: -94});
		$('#proyectos-link').localScroll({ duration: 'slow', offset: -94});
		$('#marcas').localScroll({ duration: 'slow', offset: -94});
}

function proyectos(){
	var arr = $('.container-proyecto-p');

	for (var i = 0; i <= arr.length; i++) {
		var elemWidth = $(arr[i]).width();
		var childHeight = $(arr[i]).children().height();

		$(arr[i]).css("padding-top", (elemWidth - childHeight) / 2 + "px" );
		$(arr[i]).css("padding-bottom", (elemWidth - childHeight) / 2 + "px" );
	};
}

jQuery(function($) {
	$(document).ready( function() {
	  $('#main-nav').stickUp();
	});
});