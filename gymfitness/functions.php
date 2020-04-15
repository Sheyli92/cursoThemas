<?php
/*Consultas reutilizables*/ 
require get_template_directory().'/inc/queries.php'; 


//cuando el tema es activado
function gymfitness_setup(){
    //habilitar img destacadas
    add_theme_support('post-thumbnails');

    //agregar img de tamanios personalizados
    add_image_size( 'square', 350, 350, true );
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'cajas', 400, 375, true );
    add_image_size( 'mediano', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );

}

add_action('after_setup_theme','gymfitness_setup');
 

//habilitar el menu, se utilizaarreglo para graegar mas de un menu
function gymfitness_menus(){    
    register_nav_menus(array(
        'menu-principal' =>__('Menu principal', 'gymfitness'),
        'menu-principal2' =>__('Menu principal2', 'gymfitness')

    ));
}
// hoop= so funciones funcionan en determinado tiempo
//int= arranca cuando wordpress inicia, cuando yo visite el sitio web
add_action( 'init', 'gymfitness_menus');//llama a la funcion menu

//Cargar los archivos de Scripts y styles
function gymfitness_scripts_styles(){
    //handle= nombre del archivo, debe ser unico, el nombre debe ser relaiconado con lo que se esta cargando
    //src= ruta get_stylesheet_uri()
    //$deps= por el momento arreglo vacio
    //$ver= version
    //$media= de donde se va a cargar esta hoja de estilos
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
    
    wp_enqueue_style('slicknavCSS ', get_template_directory_uri().'/css/slicknav.min.css', array(), '1.0.0');
    
    //cargamos la ruta de google fonts con los estilos seleccionados
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Germania+One&family=Kumar+One&family=Notable&family=Open+Sans:wght@300&family=Playball&family=Raleway:wght@100&family=Staatliches&display=swap', array(), '1.0.0');

    //ligthbox solo lo necesitamos en la galeria
    if(is_page('galeria')):
        wp_enqueue_style('lightboxCSS', get_template_directory_uri().'/css/lightbox.min.css', array(), '2.11.0');
    endif;
    
    //la hoja de estilo principal    
    //el array lleva una dependencia, es decir, que necesita del archivo normalize para cargar nuestro estilo
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    /*cargar scrips
    true= para que se carga al final
    */
    wp_enqueue_script( 'slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array
    ('jquery'), '1.0.0', TRUE);

    //ligthbox solo lo necesitamos en la galeria
    if(is_page('galeria')):
        wp_enqueue_script( 'ligthboxJS', get_template_directory_uri().'/js/lightbox.min.js', array('jquery'), '2.11.0', TRUE);
    endif;

    wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);  
    

}
//cargar hojas de stylo en la parte frontal
//para que es hoop funcione se necesita llamar a otra funcion en el archivo header, wp_head()
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


/**Definir Zona de widgets 
 * o soporte de widgets para nuestro tema
*/

function gymfitness_widgets(){
    register_sidebar( array(
        'name'=>'Sidebar 1',
        'id' => 'sidebar_1',
        'before-widget' => '<div class="widget">', 
        'after-widget' => '</div>', 
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'


    ));
    register_sidebar( array(
        'name'=>'Sidebar 2',
        'id' => 'sidebar_2',
        'before-widget' => '<div class="widget">', 
        'after-widget' => '</div>', 
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'


    ));
}

add_action('widgets_init','gymfitness_widgets');
