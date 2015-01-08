<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="language" content="spanish">
        <title>Starlicht</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


        <!-- WP HEAD -->
        <?php wp_enqueue_script('jquery');
        ?>
        <?php wp_head();?>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#main-nav" data-offset="104" onload="actualiza()">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Page Container -->
        <div id="">

        <!-- Navbar -->
        <nav id="main-nav" class="navbar navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="logo-nav" class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal.svg" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-collapse">
            <!-- //<?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?> -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php bloginfo( 'url' ); ?>/#intro">QUIÉNES SOMOS</a></li>
                <li><a href="<?php bloginfo( 'url' ); ?>/#marcas">MARCAS</a></li>
                <li id="proyectos-link"><a href="<?php bloginfo( 'url' ); ?>/#proyectos">PROYECTOS</a></li>
                <li><a href="<?php bloginfo( 'url' ); ?>/#prensa">PRENSA</a></li>
                <li><a href="<?php bloginfo( 'url' ); ?>/#contacto">CONTACTO</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav><!-- /.Navbar -->