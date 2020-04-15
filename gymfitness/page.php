<?php get_header();?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas')?> 
        </div>
        <?php get_sidebar()?>
    </main>


<!-- Escrito por: <?php the_author();?>
Escrito fecha: <?php the_date();?> -->

<?php get_footer();?>