$(document).ready( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );

} );


$(window).resize( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	$('#foto-intro').height( height - $('#main-nav').height() - 42 );
	
} );

jQuery(function($) {
	$(document).ready( function() {
	  //enabling stickUp on the '.navbar-wrapper' class
	  $('#main-nav').stickUp();
	});
});