<?php
    function my_theme_enqueue_scripts() {
        wp_enqueue_style('parent-css', get_parent_theme_file_uri('style.css'));
    }
    add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
    
    function my_excerpt_length($length) {
        return 40;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
    
    function custom_post_per_page($query){
        if( is_search() || is_archive() ) {
            $query->set('post_per_page', '15');
        }
    }
    add_action('pre_get_posts', 'custom_post_per_page'); // Hook y funcion, antes de obtener los posts
 