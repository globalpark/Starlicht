<?php
/*
Template Name: Proyecto
*/
?>

<?php get_header(); ?>


<section id="proyecto">
            
            <div class="container thin foto-proyecto" id="foto-proyecto">
                <div class="desc-proyecto-container col-sm-7 col-sm-offset-5">
                    <div class="titulo-detalle-proyecto thin">
                        <p>  <?php the_title(); ?>  </p>
                    </div>

                    <div class="desc-detalle-proyecto">
                        <p class="texto-desc-detalle">  <?php echo apply_filters('the_content', $post->post_content); ?> </p>
                    </div>
                    <a href="<?php bloginfo( 'url' ); ?>/#proyectos"><p>ver más proyectos</p></a>

                </div>
            </div>
        </section>

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
 

                        
 
        // Print the image

        
    }







?>












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
</script>
        
    </body>
</html>