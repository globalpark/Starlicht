$(document).ready( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );

	$('#logo-intro').css("margin-top", (height - $('#logo-intro').height())/2 + "px" );

	if( height < 740){
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .4 + "px")
	}else{
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .6 + "px")
	}

	if(width > 1900){
		$('#container-quienes').css("margin-right", "10%")
	}

	$('.marca').mouseenter( function(){
		$(this).children().children('.texto-marca').removeClass('hidden');
	}).mouseleave( function(){
		$(this).children().children('.texto-marca').addClass('hidden');
	});

	$('#entrar').localScroll({ duration: 'slow', offset: 0});
	$('#main-nav').localScroll({ duration: 'slow', offset: -94});
	$('#proyectos-link').localScroll({ duration: 'slow', offset: -94});

	$('.texto-marca').height( ( $('.marca').height() - $('.titulo-marca').height() ) );

	$('.proyecto').height( height - ( $('#main-nav').height() + $('#proyectos-nav').height() ) - 42 );

} );

$(document).on('scroll', function(){
});

$(window).resize( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );

	$('#logo-intro').css("margin-top", (height - $('#logo-intro').height())/2 + "px" );

	if( height < 740){
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .4 + "px")
	}else{
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .6 + "px")
	}

	if(width > 1900){
		$('#container-quienes').css("margin-right", "10%")
	}

	$('.marca').mouseenter( function(){
		$(this).children().children('.texto-marca').removeClass('hidden');
	}).mouseleave( function(){
		$(this).children().children('.texto-marca').addClass('hidden');
	});

	$('#main-nav').localScroll({ duration: 'slow', offset: -94});
	$('#proyectos-link').localScroll({ duration: 'slow', offset: -94});

	$('.texto-marca').height( ( $('.marca').height() - $('.titulo-marca').height() ) );

	$('.proyecto').height( height - ( $('#main-nav').height() + $('#proyectos-nav').height() ) - 42 );
	
} );

jQuery(function($) {
	$(document).ready( function() {
	  $('#main-nav').stickUp();
	});
});