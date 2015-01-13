<?php

//Theme image sizes
add_theme_support( 'post-thumbnails', array( 'post', 'proyecto', 'marca', 'prensa', 'header' ) );
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


function wpbootstrap_scripts_with_jquery(){
	// Register the script like this for a theme:
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array( 'jquery' ) );
	wp_register_script( 'jQuery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jQuery' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );




function wpstarlicht_scripts(){
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


function wpstarlicht_basic_scripts(){
  wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array() );
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array() );
  wp_register_script( 'backstretch', get_template_directory_uri() . '/js/vendor/jquery.backstretch.js', array() );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap' );
  wp_enqueue_script( 'backstretch' );
  
}
add_action( 'wp_footer', 'wpstarlicht_basic_scripts');


// Menús //
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'page-menu' => __( 'Page Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// Custom Post Type Proyecto
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'header',
    array(
      'taxonomies' => array('category'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail'),
      'labels' => array(
        'name' => __( 'Header' ),
        'singular_name' => __( 'header' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'marca',
    array(
      'taxonomies' => array('category'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'labels' => array(
        'name' => __( 'Marcas' ),
        'singular_name' => __( 'marca' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'proyecto',
    array(
      'taxonomies' => array('category'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'labels' => array(
        'name' => __( 'Proyectos' ),
        'singular_name' => __( 'proyecto' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'prensa',
    array(
      'taxonomies' => array('category'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'labels' => array(
        'name' => __( 'Prensa' ),
        'singular_name' => __( 'prensa' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}




// Erase images from content
add_filter('the_content', 'strip_images',2);

function strip_images($content){
   return preg_replace('/<img[^>]+./','',$content);
}



// Opciones (Settings API) //
add_action( 'admin_menu', 'my_admin_menu' );
function my_admin_menu() {
    add_options_page( 'Opciones', 'Opciones de Página', 'manage_options', 'menu-options', 'options_page' );
}


add_action( 'admin_init', 'my_admin_init' );
function my_admin_init() {



    add_settings_section( 'home-section', 'Home', 'home_section_callback', 'menu-options' );
    add_settings_section( 'contact-section', 'Contacto', 'contact_section_callback', 'menu-options' );

    register_setting( 'main-settings-group', 'header-option' );
    add_settings_field( 'field-one', 'Título', 'field_one_callback', 'menu-options', 'home-section' );

    register_setting( 'main-settings-group', 'description-option' );
    add_settings_field( 'field-two', 'Descripción', 'field_two_callback', 'menu-options', 'home-section' );

    register_setting( 'main-settings-group', 'city-option' );
    add_settings_field( 'field-three', 'Ciudad', 'field_three_callback', 'menu-options', 'contact-section' );

    register_setting( 'main-settings-group', 'tel1-option' );
    add_settings_field( 'field-four', 'Teléfono 1', 'field_four_callback', 'menu-options', 'contact-section' );

    register_setting( 'main-settings-group', 'tel2-option' );
    add_settings_field( 'field-five', 'Teléfono 2', 'field_five_callback', 'menu-options', 'contact-section' );

    register_setting( 'main-settings-group', 'email-option' );
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
    $setting = esc_attr( get_option( 'description-option' ) );
    //echo "<input type='text' name='description-option' value='$setting2' />";
     echo '<textarea id="description_option" name="description-option" rows="5" cols="50">' . $setting . '</textarea>';
}

function field_three_callback() {
    $setting = esc_attr( get_option( 'city-option' ) );
    echo "<input type='text' name='city-option' value='$setting' />";
}

function field_four_callback() {
    $setting = esc_attr( get_option( 'tel1-option' ) );
    echo "<input type='text' name='tel1-option' value='$setting' />";
}

function field_five_callback() {
    $setting = esc_attr( get_option( 'tel2-option' ) );
    echo "<input type='text' name='tel2-option' value='$setting' />";
}

function field_six_callback() {
    $setting = esc_attr( get_option( 'email-option' ) );
    echo "<input type='text' name='email-option' value='$setting' />";
}


function bdw_get_images() {
 
    // Get the post ID
    $iPostID = $post->ID;
 
    // Get images for this post
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
 
    // If images exist for this page
    if($arrImages) {
 
        // Get array keys representing attached image numbers
        $arrKeys = array_keys($arrImages);
 
        /******BEGIN BUBBLE SORT BY MENU ORDER************
        // Put all image objects into new array with standard numeric keys (new array only needed while we sort the keys)
        foreach($arrImages as $oImage) {
            $arrNewImages[] = $oImage;
        }
 
        // Bubble sort image object array by menu_order TODO: Turn this into std "sort-by" function in functions.php
        for($i = 0; $i < sizeof($arrNewImages) - 1; $i++) {
            for($j = 0; $j < sizeof($arrNewImages) - 1; $j++) {
                if((int)$arrNewImages[$j]->menu_order > (int)$arrNewImages[$j + 1]->menu_order) {
                    $oTemp = $arrNewImages[$j];
                    $arrNewImages[$j] = $arrNewImages[$j + 1];
                    $arrNewImages[$j + 1] = $oTemp;
                }
            }
        }
 
        // Reset arrKeys array
        $arrKeys = array();
 
        // Replace arrKeys with newly sorted object ids
        foreach($arrNewImages as $oNewImage) {
            $arrKeys[] = $oNewImage->ID;
        }
        ******END BUBBLE SORT BY MENU ORDER**************/
 
        // Get the first image attachment
        $iNum = $arrKeys[0];
 
        // Get the thumbnail url for the attachment
        //$sThumbUrl = wp_get_attachment_thumb_url($iNum);
 
        // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
        $sImageUrl = wp_get_attachment_url($iNum);
 
        // Build the <img> string
        $sImgString = '<a href="' . get_permalink() . '">' .
                            '<img src="' . $sImageUrl . '"   alt="" title="" />' .
                        '</a>';
 
        // Print the image
        echo $sImgString;
    }
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