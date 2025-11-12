<?php
    /*
        Enunciado del Ejercicio: Escribe un código en PHP para WordPress que muestre los títulos de todas las publicaciones en tu sitio. 
        Si no hay publicaciones disponibles, el código debe mostrar un mensaje que diga: “Lo siento, no hay publicaciones disponibles”.
    */
    $args = array (
        'post_type'=> 'post',
    );
    $query = new  WP_Query($args);
    if($query->have_posts()):
        while($query->have_posts()):
            $query->the_post();
?>

    <h1><?php the_title(); ?></h1>
    <!-- aquí iria todo el codigo html con los correspondientes the_* para sacar la información-->


<?php
        endwhile;
    else:
        echo "no hay post publicados aun.";
    endif;
    wp_reset_postdata();
?>

<!--**********************************************************************************-->
<?php
    /*
        Enunciado del Ejercicio: Escribe un código en PHP para WordPress que muestre los títulos y el contenido de las últimas 5 publicaciones en tu sitio. 
        Además, cada título debe ser un enlace a la publicación correspondiente. 
        Si no hay publicaciones disponibles, el código debe mostrar un mensaje que diga: “Lo siento, no hay publicaciones disponibles”.
    */
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    if($query->have_posts()):
        while($query->have_posts()):
            $query->the_post();
?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php 
        endwhile;
    else:
        echo "lo siento, no hay publicaciones disponibles.";
    endif;
    wp_reset_postdata();
?>
<!--**********************************************************************************-->
<?php
    /*
    Enunciado del Ejercicio: Escribe un código en PHP para WordPress que muestre los títulos, 
    el contenido y la fecha de publicación de las últimas 3 publicaciones de la categoría “Noticias”.
    Además, cada título debe ser un enlace a la publicación correspondiente. 
    Si no hay publicaciones disponibles en esa categoría, el código debe mostrar un mensaje que diga: 
    “Lo siento, no hay publicaciones disponibles en la categoría Noticias”.
    */
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'Noticias',
    );
    $query = new WP_Query($args);
    if($query->have_posts()):
        while($query->have_posts()):
            $query->the_post();
?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php the_content(); ?></p>
    <h1><?php the_time('F j, Y'); ?></h1>
<?php
        endwhile;
    else:
        echo "lo siento, no hay publicaciones disponibles en la categoría Noticias.";
    endif;
    wp_reset_postdata();
?>
<!--**********************************************************************************-->
<?php
    /*
        Enunciado del Ejercicio: Escribe un código en PHP para WordPress que muestre los títulos, el contenido, 
        la fecha de publicación y la imagen destacada de las últimas 3 publicaciones de la categoría “Noticias”. 
        Además, cada título debe ser un enlace a la publicación correspondiente. 
        Si no hay publicaciones disponibles en esa categoría, el código debe mostrar un mensaje que diga: 
        “Lo siento, no hay publicaciones disponibles en la categoría Noticias”.
    */
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'Noticias',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
        while($query->have_posts()):
            $query->the_post();
            if(has_post_thumbnail()) {
                $postImg = the_post_thumbnail_url();
            } else {
                $postImg = get_template_directory_uri() .'/assets/img/imagenpordefecto.png';
            }
    
?>
        <img src="<?php echo $postImg ?>"></img>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
        <h1><?php the_time('F j, Y'); ?></h1>
<?php
        endwhile;
    else:
        echo "lo siento, no hay publicaciones disponibles en la categoría Noticias.";
    endif;
    wp_reset_postdata();
?>
<!--**********************************************************************************-->
<?php
    /*
        Enunciado del Ejercicio: Escribe un código en PHP para WordPress que muestre los títulos, 
        el contenido, la fecha de publicación, la imagen destacada y los comentarios de las últimas
        3 publicaciones de la categoría “Noticias”. Además, cada título debe ser un enlace a la publicación correspondiente. 
        Si no hay publicaciones disponibles en esa categoría, el código debe mostrar un mensaje que diga: 
        “Lo siento, no hay publicaciones disponibles en la categoría Noticias”.
    */
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'Noticias',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
        while($query->have_posts()):
            $query->the_post();
            if(has_post_thumbnail()) {
                $postImg = the_post_thumbnail_url();
            } else {
                $postImg = get_template_directory_uri() .'/assets/img/imagenpordefecto.png';
            }
?>
        <img src="<?php echo $postImg ?>"></img>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
        <h2><?php the_time('F j, Y'); ?></h2>
        <div class="comments"><?php wp_list_comments(); // no estoy seguro pero creo que hay que ponerlo en comments.php?></div>
<?php
        endwhile;
    else:
        echo "lo siento, no hay publicaciones disponibles en la categoría Noticias.";
    endif;
    wp_reset_postdata();
?>
<!--**********************************************************************************-->

(1). Escribe una función que cambie la longitud del extracto en WordPress. 

(2). Escribe una función que liste todos los roles disponibles en tu instalación de WordPress. 

(3). Añade un archivo JavaScript personalizado a tu tema de WordPress.

(4). Implementa un contador de visitas para las publicaciones en tu sitio de WordPress.

(5). Escribe una consulta que devuelva todas las publicaciones que pertenecen a una taxonomía específica.










<!--**********************************************************************************-->
<?php
    //(1). Escribe una función que cambie la longitud del extracto en WordPress.
    
    function change_length_excerpt( $length ) {
        return $length;
    }
    add_filter('excerpt_length', 'change_length_excerpt');
?>
<?php
    //(2). Escribe una función que liste todos los roles disponibles del usuario de WordPress. 
    
    function user_role_list( $user_id ) {
        $user = get_userdata($user_id);
        $roles = $user->roles;
        return implode(', ', $roles);
    }
?>
<?php
    //(3). Añade un archivo JavaScript personalizado a tu tema de WordPress.
    
    function add_theme_scripts() {
        wp_register_script('archivo', get_template_directory_uri().'/assets/js/archivo.js',array(),null,true);
        wp_enqueue_script('archivo');
    }
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
?>
<?php

    //(4). Implementa un contador de visitas para las publicaciones en tu sitio de WordPress.
    
    function get_num_visits( $post_id ) {
        $numVisits = get_post_meta( $post_id, 'numVisits',  true);
        if(!$numVisits) $numVisits = 0); 

        if ($numVisits == 1) {
            return $numVisits . ' Visit';
        } else {
            return $numVisits . ' Visits';
        }
    }
    
    function add_num_visits( $post_id ) {
        $numVisits = get_post_meta( $post_id, 'numVisits',  true);
        if($numVisits == 0) {
            add_post_meta($post_id, 'numVisits', 1, true);
        } else {
            $numVisits++;
            update_post_meta($post_id, 'numVisits', $numVisits);
        }
    }
    
?>

<?php
    //(5). Escribe una consulta que devuelva todas las publicaciones que pertenecen a una taxonomía específica.
    $args = array(
        'post_type' => 'custom_post_type',
        'tax_query' => array(array(
            'taxonomy' => 'categosiasPropias',
            'field' => 'slug',
            'terms' => 'ejemplo',
            'operator' => 'IN',
        )),
    );
    $query = new WP_Query($args);
?>
<!--**********************************************************************************-->

<!--**********************************************************************************-->

<!--**********************************************************************************-->

<!--**********************************************************************************-->

<!--**********************************************************************************-->
