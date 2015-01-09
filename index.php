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

        <div id="page-container"><!-- Page Container -->

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
              <a id="logo-nav" class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal.svg" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav><!-- /.Navbar -->

        <!-- Intro -->
        <section id="intro">

            <div id="foto-intro" class="container-fluid">

                <div id="container-quienes" class="container">

                    <div class="row">
                        <div id="titulo-quienes" class="col-sm-6 col-xs-12 right">
                            <h1 class="thin"><?php echo get_option( 'header-option' ); ?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div id="texto-quienes" class="col-sm-7 col-xs-12 right">
                            <p class="thin"><?php echo get_option( 'description-option' ); ?></p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /.Intro -->

        <!-- WP Loop -->
        <?php


        $query = new WP_Query( 
          array( 
            'post_type' => 'header', 
            'posts_per_page' => -1,
            'fields' => 'ids'
          ) 
        );
        $image_query = new WP_Query( 
          array( 
            'post_type' => 'attachment', 
            'post_status' => 'inherit', 
            'post_mime_type' => 'image', 
            'posts_per_page' => -1, 
            'post_parent__in' => $query->posts, 
            'order' => 'DESC' 
          ) 
        );
$i = 0;
$arrayURL = array();
        if( $image_query->have_posts() ){
          while( $image_query->have_posts() ) {
              $image_query->the_post();
              $imgurl = wp_get_attachment_url( get_the_ID() );
              $arrayURL[] = $imgurl;
              echo $arrayURL[];
          }
        }



/* -------------------------------------//
            
            $args = array(
                 'posts_per_page' => 8,
                 'orderby' => 'rand',
                 'post_type' => array(
                    'attachment',
                    'header'
                )
            );

            $attachments = get_posts($args);


            if ( $attachments ) {
                    foreach ( $attachments as $post ) {
                        setup_postdata( $post );
                        the_title();
                        the_attachment_link($post->ID, 'medium', true);

                    }
                    wp_reset_postdata();
                }


*/
/*  ------------------------------------------------- //



            $arrKeys;
            $iNum;
            $sImageUrl;
            $sImgString;

            $query = new WP_Query('post_type=header');
            if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $args = array(
                    'post_type'      => 'header',
                    'post_mime_type' => 'image',
                    'post_parent'    => $post->ID,
                    'numberposts'    => 10,
                );

                
                // Build the <img> string

                //echo $sImageUrl; 
                /*if ($attachments) {
                foreach ($attachments as $attachment) {
                $urlImg = array( wp_get_attachment_url( $attachment->ID, true ));
                

        endwhile;
        endif;
*/
        ?>


<!--
            $arrKeys;
            $iNum;
            $sImageUrl;
            $sImgString;

                // Get the post ID
                $iPostID = $post->ID;
             
                // Get images for this post
                $arrImages =& get_posts('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
             
                // If images exist for this page
                if($arrImages) {
             
                    // Get array keys representing attached image numbers
                    $arrKeys = array_keys($arrImages);    
                }
        ?>

        -->

        <!-- /WP Loopp -->



        <!-- Marcas -->
        <section id="marcas">
            
            <div class="container thin">
                <div class="row">
              
                    <!-- WP Query Marcas -->
                    <?php $args = array( 'post_type' => 'marca', 'posts_per_page' => 10 ); ?>
                    <?php $the_query = new WP_Query($args); ?>
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
                    <?php wp_reset_query(); ?>

                </div>
            </div>

        </section><!-- /.Marcas -->

        <!-- Proyectos -->
        <section id="proyectos">
            <div class="container">
                <div class="row">
                    <ul id="proyectos-nav" class="nav nav-pills nav-justified" role="tablist">
                        <li class="active"><a href="#p-swareflex" role="tab" data-toggle="tab">SWAREFLEX</a></li>
                        <li><a href="#p-lts" role="tab" data-toggle="tab">LTS</a></li>
                        <li><a href="#p-bartenbach" role="tab" data-toggle="tab">BARTENBACH</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                
                <div class="tab-pane fade in active proyecto" id="p-swareflex">
                    <div class="container container-proyecto">

                        <!-- WP Query Proyectos -->
                        <?php $args = array( 'post_type' => 'proyecto','category_name' => 'proyecto-swareflex', 'posts_per_page' => 10 ); ?>
                        <?php $the_query2 = new WP_Query($args); ?>
                        <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>

                        <?php
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'Marca', true);
                        $thumb_url = $thumb_url_array[0];
                        ?>

                        <a href=<?php the_permalink(); ?>><div class="proyecto-individual col-sm-3">
                            <div class="nombre-proyecto" style="background-image: url(<?php echo $thumb_url ?>)" >
                                <div class="container-proyecto-p">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                        </div></a>

                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                    </div>
                </div>

                <div class="tab-pane fade proyecto" id="p-bartenbach">
                    <div class="container container-proyecto">

                        <!-- WP Query Proyectos -->
                        <?php $args = array( 'post_type' => 'proyecto','category_name' => 'proyecto-bartenbach', 'posts_per_page' => 10 ); ?>
                        <?php $the_query2 = new WP_Query($args); ?>
                        <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>

                        <?php
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'Marca', true);
                        $thumb_url = $thumb_url_array[0];
                        ?>

                        <a href=<?php the_permalink(); ?>><div class="proyecto-individual col-sm-3">
                            <div class="nombre-proyecto" style="background-image: url(<?php echo $thumb_url ?>)" >
                                <div class="container-proyecto-p">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                        </div></a>

                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                    </div>
                </div>

                <div class="tab-pane fade proyecto" id="p-lts">
                    <div class="container container-proyecto">

                        <!-- WP Query Proyectos -->
                        <?php $args = array( 'post_type' => 'proyecto','category_name' => 'proyecto-lts', 'posts_per_page' => 10 ); ?>
                        <?php $the_query2 = new WP_Query($args); ?>
                        <?php if ($the_query2->have_posts()) : while ($the_query2->have_posts()) : $the_query2->the_post(); ?>

                        <?php
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'Marca', true);
                        $thumb_url = $thumb_url_array[0];
                        ?>

                        <a href=<?php the_permalink(); ?>><div class="proyecto-individual col-sm-3">
                            <div class="nombre-proyecto" style="background-image: url(<?php echo $thumb_url ?>)" >
                                <div class="container-proyecto-p">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                        </div></a>

                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                    </div>
                </div>

            </div>
            
        </section><!-- /.Proyectos -->

        <!-- Prensa -->
        <section id="prensa">
            <div class="container">
                <div id="titulo-prensa" class="row">
                    <div class="col-sm-12">
                        <h1 class="center thin">Prensa</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            
                <!-- Wordpress Query for Prensa -->
                <?php $args = array( 'post_type' => 'prensa', 'posts_per_page' => 10 ); ?>
                <?php $the_query1 = new WP_Query($args); ?>
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
        </section><!-- ./Prensa -->


        <section id="contacto"><!-- Contacto -->
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
                    <h3 class="center m-top40"><?php echo get_option( 'city-option' ); ?></h3>
                    <h3 class="center m-top40"><?php echo get_option( 'tel1-option' ); ?></h3>
                    <h3 class="center"><?php echo get_option( 'tel2-option' ); ?></h3>
                    <a href="mailto:info@starlichtmexico.com"><h3 class="center m-top40 thin"><?php echo get_option( 'email-option' ); ?></h3></a>
                </div>

            </div>
        </section><!-- ./Contacto -->

        </div><!-- ./Page Container -->


        <!-- WP FOOTER -->
        <?php wp_footer();
        wpstarlicht_scripts();
        ?>


            <script type="text/javascript">
             $( document ).ready(function() {
                //Start Slideshow
                $("#foto-intro").backstretch([
                    <?php 
                        for($k=0; $k < sizeof($arrayURL) -1; $k++){

                            $sImgString = '"' . $arrayURL[k] . '",';
                            echo $sImgString;
                        }

                        $iNum = $arrKeys[sizeof($arrayURL)-1];

                            $sImgString = '"' . $arrayURL[k] . '",';
                            echo $sImgString;

                    ?>
                        
                    ], {duration: 2000, fade: 750} );
                
            $('.fancybox').fancybox();
        } );

        </script>
        
    </body>
</html>
