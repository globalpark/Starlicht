<?php


add_theme_support( 'post-thumbnails' ); 
add_image_size( 'Prensa', 600, 450, true );	

//Hacer imagenes responsivas
function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );


function wpbootstrap_scripts_with_jquery()

{
	// Register the script like this for a theme:
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array( 'jquery' ) );
	wp_register_script( 'jQuery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jQuery' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );




  function wpstarlicht_scripts()
{

	wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array() );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array() );
	wp_register_script( 'backstretch', get_template_directory_uri() . '/js/vendor/jquery.backstretch.js', array() );
	wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/vendor/jquery.scrollTo.min.js', array() );
	wp_register_script( 'localScroll', get_template_directory_uri() . '/js/vendor/jquery.localScroll.min.js', array() );
	wp_register_script( 'stickUp', get_template_directory_uri() . '/js/vendor/stickUp.js', array() );
	wp_register_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js', array() );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'backstretch' );
	wp_enqueue_script( 'scrollTo' );
	wp_enqueue_script( 'localScroll' );
	wp_enqueue_script( 'stickUp' );
	wp_enqueue_script( 'fancybox' );
	wp_enqueue_script( 'main' );
	
}

add_action( 'wp_footer', 'wpstarlicht_scripts');

?>