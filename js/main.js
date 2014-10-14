$(document).ready( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");

} );


$(window).resize( function(){

	width = $(window).width();
	height = $(window).height();

	$('#page-container').css("margin-top", height + "px");
	
} );