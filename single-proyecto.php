<?php
/*
Template Name: Proyecto
*/
?>

<?php get_header(); ?>


    <section id="proyecto">
        
        
        <div class="row" id="arrows" >
            <div class="col-xs-1">
                <i id="prev" class="fa fa-angle-left fa-3x center slider-control"></i>
            </div>
            <div class="col-xs-offset-10 col-xs-1">
                <i id="next" class="fa fa-angle-right fa-3x center slider-control"></i>
            </div>
        </div>

        <div class="container thin foto-proyecto" id="foto-proyecto">
            <div class="desc-proyecto-container col-md-8 col-md-offset-4 col-sm-12 hidden-xs">
                <div class="titulo-detalle-proyecto thin">
                    <p>  <?php the_title(); ?>  </p>
                </div>

                <div class="desc-detalle-proyecto">
                    <p class="texto-desc-detalle"> <?php the_excerpt(); ?>  </p>
                </div>
                <a href="<?php bloginfo( 'url' ); ?>/#proyectos"><p>ver más proyectos</p></a>

            </div>
        </div>
        <div class="row">
             <div class="desc-proyecto-container col-xs-12 visible-xs">
                    <div class="titulo-detalle-proyecto thin">
                        <p>  <?php the_title(); ?>  </p>
                    </div>

                    <div class="desc-detalle-proyecto">
                        <p class="texto-desc-detalle"> <?php the_excerpt(); ?>  </p>
                    </div>
                    <a href="<?php bloginfo( 'url' ); ?>/#proyectos"><p>ver más proyectos</p></a>

            </div>
        </div>
    </section>

<!-- WP Loop -->
<?php

$arrKeys;
$iNum;
$sImageUrl;
$sImgString;

    // Get the post ID
    $iPostID = $post->ID;
 
    // Get images for this post
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
 
    // If images exist for this page
    if($arrImages) {
 
        // Get array keys representing attached image numbers
        $arrKeys = array_keys($arrImages);    
    }
?>
<!-- /WP Loopp -->

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

</div><!-- /Page Container -->


        <!-- WP FOOTER -->
        <?php wp_footer();
            wpstarlicht_basic_scripts();
        ?>


        <script type="text/javascript">
            $( document ).ready(function() {
                // Calculate viewport height
                var height = $("#foto-proyecto").height();
                $("#arrows").css("margin-top", height/2 - 15 + "px");


                //Start Slideshow
                $("#foto-proyecto").backstretch([
                    <?php 
                        for($k=0; $k < sizeof($arrKeys) -1; $k++){
                            // Get the first image attachment
                             $iNum = $arrKeys[$k];

                            // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
                            $sImageUrl = wp_get_attachment_url($iNum);
                     
                            // Build the <img> string
                            $sImgString = '"' . $sImageUrl . '",';
                            echo $sImgString; 
                        }

                        $iNum = $arrKeys[sizeof($arrKeys)-1];

                            // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
                            $sImageUrl = wp_get_attachment_url($iNum);
                     
                            // Build the <img> string
                            $sImgString = '"' . $sImageUrl . '"';
                            echo $sImgString; 
                    ?>
                    ], {duration: 2000, fade: 750} );
                /*
                $(document).ready( function(){
                    $('.fancybox').fancybox();
                } );
                */


                //Slideshow controllers
                $("#prev").click( function(){
                  $("#foto-proyecto").backstretch("prev");
                });
                $("#next").click( function(){
                  $("#foto-proyecto").backstretch("next");
                });


            });
            $( window ).resize(function() {
                var height = $("#foto-proyecto").height();
                $("#arrows").css("margin-top", height/2 - 15 + "px");
            });
        </script>
        
    </body>
</html>