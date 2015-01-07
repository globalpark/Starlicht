<?php
/*
Template Name: Proyecto
*/
?>

<?php get_header(); ?>


<section id="marcas">
            
            <div class="container thin foto-proyecto" id="foto-proyecto" style="background-image: url(img/Swareflex/Berguer/_DSC1293.jpg)">
                <div class="desc-proyecto-container col-sm-7 col-sm-offset-5">
                    <div class="titulo-detalle-proyecto thin">
                        <p>  <?php the_title(); ?>  </p>
                    </div>

                    <div class="desc-detalle-proyecto">
                        <p class="texto-desc-detalle">  <?php echo $post->post_content ?>  </p>
                    </div>
                    <a href="index.html#proyectos"><p>ver más proyectos</p></a>

                </div>
            </div>
        </section>



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






<?php get_footer(); ?>