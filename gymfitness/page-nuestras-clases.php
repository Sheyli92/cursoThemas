<?php get_header();?>
    <main class="contenedor pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas')?> 

            <?php gymfitness_lista_clases();?>
        </div>
    </main>


<!-- Escrito por: <?php the_author();?>
Escrito fecha: <?php the_date();?> -->

<?php get_footer();?>