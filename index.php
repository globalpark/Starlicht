<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="language" content="spanish">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


        <!-- WP HEAD -->
        <?php wp_enqueue_script('jquery');
        ?>
        <?php wp_head();?>

    </head>
    <body data-spy="scroll" data-target="#main-nav" data-offset="104" onload="actualiza()">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="fullscreen-background">

          <div id="logo-intro">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Starlicht-Logo.svg" class="img-responsive center">
          </div>

          <div id="entrar" class="center">
              <h3 class="center thin">ENTRA</h3>
              <a href="#page-container"><i class="fa fa-angle-down fa-3x center"></i></a>
          </div>
          
        </div>

        <div id="page-container">

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
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
              <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#intro">QUIÉNES SOMOS</a></li>
                <li><a href="#marcas">MARCAS</a></li>
                <li id="proyectos-link"><a href="#proyectos">PROYECTOS</a></li>
                <li><a href="#prensa">PRENSA</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
              </ul>-->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav><!-- /.Navbar -->

        <!-- Intro -->
        <section id="intro">

            <div id="foto-intro" class="container-fluid">

                <div id="container-quienes" class="container">

                    <div class="row">
                        <div id="titulo-quienes" class="col-sm-6 col-xs-12 right">
                            <h1 class="thin">QUIÉNES SOMOS</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div id="texto-quienes" class="col-sm-7 col-xs-12 right">
                            <p class="thin"><?php echo get_option( 'header-option' ); ?></p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /.Intro -->

        <!-- Marcas -->
        <section id="marcas">
            
            <div class="container thin">
                <div class="row">



                <!-- WP Query Marcas -->

            <?php $the_query = new WP_Query('cat=3'); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

            

            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'Marca', true);
            $thumb_url = $thumb_url_array[0];
            ?>
    

            <div class="marca col-sm-6 col-xs-12">
                    <div class="foto-marca" style="background-image: url(<?php echo $thumb_url ?>)">
                        <div class="titulo-marca thin">
                            <h2><?php the_title(); ?></h2>
                            
                        </div>
                        <div class="texto-marca hidden">
                            <?php the_content(); ?>
                            <a href="#" class="">Ver Proyectos</a>
                        </div>
                    </div>
                </div>



        
                            
        <?php endwhile; ?>
        <?php endif; ?>



                </div>
            </div>

        </section><!-- /.Marcas -->

        <!-- Proyectos -->
        <section id="proyectos">
            <div class="container">
                <div class="row">
                    <ul id="proyectos-nav" class="nav nav-pills nav-justified" role="tablist">
                        <li class="active"><a href="#p-swareflex" role="tab" data-toggle="tab">SWAREFLEX</a></li>
                        <li><a href="#p-mk" role="tab" data-toggle="tab">MK</a></li>
                        <li><a href="#p-lts" role="tab" data-toggle="tab">LTS</a></li>
                        <li><a href="#p-bartenbach" role="tab" data-toggle="tab">BARTENBACH</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div class="tab-pane fade in active proyecto" id="p-swareflex" style="background-image: url(img/home-1.jpg)">
                    <div class="container container-proyecto">
                        <div class="row">
                            <div class="titulo-proyecto col-sm-6 col-xs-12 right">
                                <h1 class="thin">SWAREFLEX</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="texto-proyecto col-sm-7 col-xs-12 right">
                                <p class="thin">Próximamente</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade proyecto" id="p-mk" style="background-image: url(img/home-2.jpg)">
                    <div class="container container-proyecto">
                        <div class="row">
                            <div class="titulo-proyecto col-sm-6 col-xs-12 right">
                                <h1 class="thin">MK</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="texto-proyecto col-sm-7 col-xs-12 right">
                                <p class="thin">Próximamente</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade proyecto" id="p-lts" style="background-image: url(img/home-3.jpg)">
                    <div class="container container-proyecto">
                        <div class="row">
                            <div class="titulo-proyecto col-sm-6 col-xs-12 right">
                                <h1 class="thin">LTS</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="texto-proyecto col-sm-7 col-xs-12 right">
                                <p class="thin">Próximamente</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade proyecto" id="p-bartenbach" style="background-image: url(img/home-4.jpg)">
                    <div class="container container-proyecto">
                        <div class="row">
                            <div class="titulo-proyecto col-sm-6 col-xs-12 right">
                                <h1 class="thin">BARTENBACH</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="texto-proyecto col-sm-7 col-xs-12 right">
                                <p class="thin">Próximamente</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
        </section><!-- /.Proyectos -->

        <!-- Prensa -->
        <section id="prensa">
        <div class="container-fluid">
        
        <!-- Wordpress Query for Prensa -->
        <?php $the_query1 = new WP_Query('showposts=6&cat=4,'); ?>
        <?php if ($the_query1->have_posts()) : while ($the_query1->have_posts()) : $the_query1->the_post(); ?>

        <?php if( has_post_thumbnail() ) { ?>

        <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        ?>

                <div class="col-sm-4 col-xs-6 p-00">
                    <a href="<?php echo $thumb_url ?>" class="fancybox" rel="group"><?php the_post_thumbnail( 'Prensa' ); ?></a>
                </div>

        <?php } ?>
                            
        <?php endwhile; ?>
        <?php endif; ?>

        </div>
        </section>



        <section id="contacto">
            <div id="foto-contacto" class="hidden">
            </div>
            
            <div class="container">

                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <h1 class="center">Envíanos tu correo y te escribimos:</h1>
                </div>

                <div id="contacto-form" class="col-sm-6 col-sm-offset-3 col-xs-12">
                    <form action="<?php the_permalink(); ?>" method="post">
                        <div class="input-group input-group-lg">
                            <input id="email" type="text" name="message_email" value="" placeholder="email" class="form-control">
                            <input type="hidden" name="submitted" value="1">
                            <span class="input-group-btn">
                                <button  id="search-btn" type="submit" class="btn btn-primary"><i class="fa fa-angle-right"></i></button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="col-sm-8 col-sm-offset-2 col-xs-12 thin">
                    <!-- <h3 class="center">Sierra de Mimbres 37</h3>
                    <h3 class="center">Lomas de Chapultepec</h3>
                    <h3 class="center">Miguel Hidalgo</h3> -->
                    <h3 class="center m-top40">Ciudad de México</h3>
                    <h3 class="center m-top40">+52 (55) 9243 3586</h3>
                    <h3 class="center">+52 (55) 5043 3708</h3>
                    <a href="mailto:info@starlichtmexico.com"><h3 class="center m-top40 thin">info@starlichtmexico.com</h3></a>
                </div>

            </div>
        </section>

        </div>


        <!-- WP FOOTER -->
        <?php wp_footer();
        wpstarlicht_scripts();
        ?>


        <script type="text/javascript">

            //Start Slideshow
            $("#foto-intro").backstretch([
                "wp-content/themes/Starlicht/img/home-1.jpg",
                "wp-content/themes/Starlicht/img/home-2.jpg",
                "wp-content/themes/Starlicht/img/home-3.jpg",
                "wp-content/themes/Starlicht/img/home-4.jpg"
                ], {duration: 2000, fade: 750} );

            $(document).ready( function(){
                $('.fancybox').fancybox();
            } );

        </script>
        
    </body>
</html>
