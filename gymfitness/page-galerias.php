<?php
/**
 * Template Name: Template para Galerias
 */


?>

<?php get_header();?>
    <main class="contenedor pagina seccion">
        <div class="contenido-principal">
            <?php while( have_posts()):the_post(); //the post= tendra la inf de la BD?>
                <h1 class="text-center texto-primario"><?php the_title(); //presenta el titulo de la pag?></h1>                    
                <?php
                // $galeria = get_post_gallery($post: integer!WP_Post, $html:boolean);
                //con el primer parametro pasamos el ID de la pagina actual, con el segundo parametros indicamos que no queremos q se muestren los datos.
                    $galeria = get_post_gallery(get_the_ID(), false);
                    echo "<pre>";//pre permite formatear el codigo 
                    var_dump($galeria); //ver los contenidos de la var $galeria
                    echo "</pre>";
                ?>       
                <!-- <php the_content(); //presenta el cont de la pag?> -->
            <?php endwhile; ?>
        </div>
    </main>


<!-- Escrito por: <?php the_author();?>
Escrito fecha: <?php the_date();?> -->

<?php get_footer();?>