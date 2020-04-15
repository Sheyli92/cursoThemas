<!-- <php get_header();?>
    <php while( have_posts()): the_post();?>
        <h1><php the_title(); ?></h1>
        <php the_content(); ?>
<php endwhile; ?>
<php get_footer(); ?> -->


<?php get_header();?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas')?> 
        </div>
        <?php get_sidebar()?>
    </main>

<?php get_footer();?>