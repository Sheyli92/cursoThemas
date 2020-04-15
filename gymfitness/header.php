<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <header class="site-header">
        <div class="contenedor">  
            <div class="barra-navegacion">
                <div class="logo">            
                    <?php // get_template_directory_uri()= nos permite obtener la dir de la img ?>
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo">
                </div>
                <?php //mostrando el menu
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav', //wordpress genera el nav
                        'container_class' => 'menu-principal',//el nav utiliza la clase container
                    );
                    wp_nav_menu($args);
                ?>
            </div>      
        </div>



    </header>
