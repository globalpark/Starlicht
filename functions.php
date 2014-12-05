<?php


add_theme_support( 'post-thumbnails' ); 
add_image_size( 'Prensa', 600, 450, true );	
add_image_size( 'Marca', 1000, 1000, true );	

//Hacer imagenes responsivas
function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive center'; // separated by spaces, e.g. 'img image-link'

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


// Menús //

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Opciones (Settings API) //

add_action( 'admin_menu', 'my_admin_menu' );
function my_admin_menu() {
    add_options_page( 'Opciones', 'Opciones de Página', 'manage_options', 'menu-options', 'options_page' );
}


add_action( 'admin_init', 'my_admin_init' );
function my_admin_init() {
    register_setting( 'main-settings-group', 'header-option' );
    register_setting( 'main-settings-group', 'description-option' );

    register_setting( 'main-settings-group', 'city-option' );
    register_setting( 'main-settings-group', 'tel1-option' );
    register_setting( 'main-settings-group', 'tel2-option' );
    register_setting( 'main-settings-group', 'email-option' );

    add_settings_section( 'home-section', 'Home', 'home_section_callback', 'menu-options' );
    add_settings_section( 'contact-section', 'Contacto', 'contact_section_callback', 'menu-options' );

    add_settings_field( 'field-one', 'Título', 'field_one_callback', 'menu-options', 'home-section' );
    add_settings_field( 'field-two', 'Descripción', 'field_two_callback', 'menu-options', 'home-section' );

    add_settings_field( 'field-three', 'Ciudad', 'field_three_callback', 'menu-options', 'contact-section' );
    add_settings_field( 'field-four', 'Teléfono 1', 'field_four_callback', 'menu-options', 'contact-section' );
    add_settings_field( 'field-five', 'Teléfono 2', 'field_five_callback', 'menu-options', 'contact-section' );
    add_settings_field( 'field-six', 'Mail de contacto', 'field_six_callback', 'menu-options', 'contact-section' );
}

function home_section_callback() {
    echo 'Escriba la información que aparecerá en el header de la página principal.';
}

function contact_section_callback() {
    echo 'Escriba la información que aparecerá en el footer de la página principal.';
}







function field_one_callback() {
    $setting = esc_attr( get_option( 'header-option' ) );
    echo "<input type='text' name='header-option' value='$setting' />";
}

function field_two_callback() {
    $setting2 = esc_attr( get_option( 'description-option' ) );
    echo "<input type='text' name='description-option' value='$setting2' />";
}


function field_three_callback() {
    $setting3 = esc_attr( get_option( 'city-option' ) );
    echo "<input type='text' name='city-option' value='$setting3' />";
}

function field_four_callback() {
    $setting4 = esc_attr( get_option( 'tel1-option' ) );
    echo "<input type='text' name='tel1-option' value='$setting4' />";
}

function field_five_callback() {
    $setting5 = esc_attr( get_option( 'tel2-option' ) );
    echo "<input type='text' name='tel2-option' value='$setting5' />";
}

function field_six_callback() {
    $setting6 = esc_attr( get_option( 'email-option' ) );
    echo "<input type='text' name='email-option' value='$setting6' />";
}





function options_page() {
    ?>
    <div class="wrap">
        <h2>Opciones</h2>
        <form action="options.php" method="POST">
            <?php settings_fields( 'main-settings-group' ); ?>
            <?php do_settings_sections( 'menu-options' ); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}



?>