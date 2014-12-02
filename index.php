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

    </head>
    <body data-spy="scroll" data-target="#main-nav" data-offset="104" onload="actualiza()">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="fullscreen-background">

          <div id="logo-intro">
            <img src="img/Starlicht-Logo.svg" class="img-responsive center">
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
              <a id="logo-nav" class="navbar-brand" href="#"><img src="img/logo-horizontal.svg" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#intro">QUIÉNES SOMOS</a></li>
                <li><a href="#marcas">MARCAS</a></li>
                <li id="proyectos-link"><a href="#proyectos">PROYECTOS</a></li>
                <li><a href="#prensa">PRENSA</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
              </ul>
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
                            <p class="thin">STARLICHT Iluminación es una empresa con distribución exclusiva de las marcas SWAREFLEX, LTS Y BARTENBACH, ofreciendo a nuestros clientes la mas alta calidad en tecnología Alemana y Austriaca.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /.Intro -->

        <!-- Marcas -->
        <section id="marcas">
            
            <div class="container thin">
                <div class="row">

                    <div class="marca col-sm-6 col-xs-12">
                        <div class="foto-marca" style="background-image: url(img/marcas-swareflex.jpg)">
                            <div class="titulo-marca thin">
                                <h2>SWAREFLEX</h2>
                                
                            </div>
                            <div class="texto-marca hidden">
                                <p class="thin">Swareflex es una empresa innovadora, con el desarrollo constante de la experiencia de Swarovski. La capacidad de la compañía para establecer los parámetros ópticos y con deseo de redefinir nuestra comprensión de la iluminación. Como resultado la línea de iluminación: LIGHT EXPERIENCE, es una iIuminación funcional, con ópticas de cristal; brindando una excelente durabilidad y alta eficiencia energética led.</p>
                                <a href="#" class="">Ver Proyectos</a>
                            </div>
                        </div>
                    </div>

                    <div class="marca col-sm-6 col-xs-12">
                        <div class="foto-marca" style="background-image: url(img/marcas-mk.jpg)">
                            <div class="titulo-marca thin">
                                <h2>MK</h2>
                            </div>
                            <div class="texto-marca hidden">
                                <p class="thin">Fundada en 1996, MK iluminación ha ganado reconocimiento a nivel mundial por ser unos creadores excepcionales y proveedores de iluminación festiva, para todas las ocasiones. La compañía es competente ,innovadora y un socio confiable con gran conocimiento especializado en el área. De acuerdo con su filosofía, de ser una empresa regional con una visión global. MK iluminación ofrece un servicio integral en tres áreas principales: ocio, espacios públicos y Retail Real Estate.</p>
                                <a href="#" class="">Ver Proyectos</a> 
                            </div>
                        </div>                        
                    </div>

                    <div class="marca col-sm-6 col-xs-12">
                        <div class="foto-marca" style="background-image: url(img/marcas-lts.jpg)">
                            <div class="titulo-marca thin">
                                <h2>LTS</h2>
                            </div>
                            <div class="texto-marca hidden">
                                <p class="thin">Es una empresa establecida en Ravensburg, Alemania desde 1985. La iluminación y su diversidad siempre ha sido el centro de LTS; debido a la competencia en el mercado, ha desarrollado luminarias de mayor calidad con tecnología de última generación. Nuestro servicio garantiza estética y soluciones luminotécnicas. Nuestro énfasis siempre es dirigido en conceptos de sostenibilidad. Una ventaja considerable, es a través del desarrollo y producción de tecnología, tal como: reflectores PRI, con una mayor eficiencia y ahorro considerable en los consumos energéticos.</p> 
                                <a href="#" class="">Ver Proyectos</a>   
                            </div>
                        </div>                        
                    </div>

                    <div class="marca col-sm-6 col-xs-12">
                        <div class="foto-marca" style="background-image: url(img/marcas-bartenbach.jpg)">
                            <div class="titulo-marca thin">
                                <h2>BARTENBACH</h2>
                            </div>
                            <div class="texto-marca hidden">
                                <p class="thin">Los expertos de Bartenbach se centran en el lighting design, no solamente con luz artificial sino también con Day light. Desarrollando el proyecto desde la conceptualización hasta el desarrollo de sistemas de iluminación de acuerdo a las necesidades de cada cliente. Asesoría para proyectos arquitectónicos así como también para la certificación LEED. Nuestros colaboradores, trabajan en el diseño de iluminación, investigación y desarrollo, así como también la psicología de la percepción para desarrollar soluciones de iluminación óptimos.</p> 
                                <a href="#" class="">Ver Proyectos</a>   
                            </div>
                        </div>                        
                    </div>

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
        <?php $the_query1 = new WP_Query('showposts=3&cat=4,'); ?>
        <?php if ($the_query1->have_posts()) : while ($the_query1->have_posts()) : $the_query1->the_post(); ?>

        <?php if( has_post_thumbnail() ) { ?>

        <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'Prensa', true);
        $thumb_url = $thumb_url_array[0];
        ?>

                <div class="col-sm-4 col-xs-6 p-00">
                    <a href="<?php echo $thumb_url ?>" class="fancybox" rel="group"><?php the_post_thumbnail( 'full' ); ?></a>
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
                //$('#main-nav').stickUp();//
                $('.fancybox').fancybox();
            } );

        </script>
        
    </body>
</html>
