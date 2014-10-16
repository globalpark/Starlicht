$(document).ready( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );

	if( height < 740){
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .2 + "px")
	}else{
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .4 + "px")
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

} );

$(document).on('scroll', function(){
	if( $('#main-nav').hasClass('isStuck') ){
		$('#intro').css("margin-top","94px");
	}else{
		$('#intro').css("margin-top", "0px" );
	}
});

$(window).resize( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );

	if( height < 740){
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .2 + "px")
	}else{
		$('#container-quienes').css("margin-top", ($('#foto-intro').height()) * .4 + "px")
	}
	
	if(width > 1900){
		$('#container-quienes').css("margin-right", "10%")
	}
	
} );

jQuery(function($) {
	$(document).ready( function() {
	  //enabling stickUp on the '.navbar-wrapper' class
	  $('#main-nav').stickUp();
	});
});