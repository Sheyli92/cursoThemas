    <footer class="site-footer contenedor">
        <hr>
        <diV class="contenido-footer">
            <?php //mostrando el menu
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav', //wordpress genera el nav
                        'container_class' => 'menu-principal',//el nav utiliza la clase container
                );
                wp_nav_menu($args);
            ?>
            <!--get_bloginfo(name)= toma el nombre del sitio, date toma la fecha actual, funcion de php-->
            <p class='copyright'>Todos los derechos reservados <?php echo get_bloginfo('name') . ' ' .date('Y'); ?></p>
        </div>
    </footer>
    <?php wp_footer();?> 
</body>
</html>