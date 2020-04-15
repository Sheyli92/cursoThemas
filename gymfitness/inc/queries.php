<?php

function gymfitness_lista_clases(){?>
    <ul class="lista-clases">
    <?php
    $args=array(
        'post_type'=> 'gymfitness_clases',
        'posts_per_page'=> 10,//traer una cant de registros
        'orderby'=> 'title'//ordenamos por titulo las clases
    );
    $clases = new WP_Query($args);
    while($clases -> have_posts()): $clases -> the_post();    ?>
    <li class="clase card gradient">
        <!-- <h1><php the_title()?></h1> -->
        <?php the_post_thumbnail('mediano')?>
        <div class="contenido">
            <a href="<?php the_permalink(); //permite ir a otro template con infor?>">
                <h3><?php the_title()?></h3>            
            </a>
            <?php
            //var para asignar lo que se obtiene desde el wordpress, datos que se registro
                $titulo=get_the_title();
                $horaInicio=get_field('hora_inicio');
                $horaFin=get_field('hora_fin');                    
            ?>
            <p><?php the_field('dias_clase');?> - <?php echo $horaInicio . ' a ' . $horaFin?> </p>

            
        </div>
    </li>
    <?php endwhile;  
    wp_reset_postdata();//le indicamos a wordpress que ya terminamos
    ?>

    </ul>
<?php
}


?>
