flag = 0;



function actualiza(){
	$(document).ready( function(){

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

		//Ajusta título para pantallas MUY grandes
		if(width > 1900){
			$('#container-quienes').css("margin-right", "10%")
		}

		//Overlay con el texto de las marcas.
		$('.marca').mouseenter( function(){
			$(this).children().children('.texto-marca').removeClass('hidden');
		}).mouseleave( function(){
			$(this).children().children('.texto-marca').addClass('hidden');
		});

		//Enable Local Scroll
		$('#entrar').localScroll({ duration: 'slow', offset: 0});
		$('#main-nav').localScroll({ duration: 'slow', offset: -94});
		$('#proyectos-link').localScroll({ duration: 'slow', offset: -94});

		//-----AJUSTES DE TAMAÑO (por si la cagué con algún ajuste) ----//
		$('.texto-marca').height( ( $('.marca').height() - $('.titulo-marca').height() ) );
		$('.proyecto').height( height - ( $('#main-nav').height() + $('#proyectos-nav').height() ) - 42 );

		if( $('#foto-intro').height() < $('#container-quienes').height() ){
			$('#foto-intro').height( $('#container-quienes').height()*1.2 );
		}

		if( $('.proyecto').height() < $('.titulo-proyecto').height() ){
			$('.proyecto').height( $('.titulo-proyecto').height()*1.2 );
		}

	} );
}

$(document).on('scroll', function(){
});

$(document).ready( function(){
	actualiza();
} );

$(window).resize( function(){
	actualiza();
} );

jQuery(function($) {
	$(document).ready( function() {
	  $('#main-nav').stickUp();
	});
});