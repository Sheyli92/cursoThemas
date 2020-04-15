<?php while( have_posts()):the_post(); //the post= tendra la inf de la BD?>
    <h1 class="text-center texto-primario"><?php the_title(); //presenta el titulo de la pag?></h1>    
    <?php 
    //compruba si hay img destacada
    if(has_post_thumbnail()):
        /*
        thumbnail=img pequenia
        medium= img mediana
        large, full 
        */
        the_post_thumbnail('blog', array('class'=>'imagen-destacada'));
    endif;
    ?>    
    
    <?php
    //este bloque de codigo evalua si esta trabajando con cada clase entonces muestra la informacion
        //revisar si el custom post_types es clases
        if(get_post_type() === 'gymfitness_clases'){        
            //var para asignar lo que se obtiene desde el wordpress, datos que se registro
            // $titulo=get_the_title();
            $horaInicio=get_field('hora_inicio');
            $horaFin=get_field('hora_fin');                    
    ?>
            <p class="informacion-clase"><?php the_field('dias_clase');?> - <?php echo $horaInicio . ' a ' . $horaFin?> </p>
    <?php } ?>

    <?php the_content(); //presenta el cont de la pag?>
<?php endwhile; ?>