<?php
/**
* Plugin Name
*
* @package           ProjectsPackage
* @author            Victorino Fernández Heredia
* @copyright         2023 Victorino Fernández 
* @license           GPL-2.0-or-later
*
* @wordpress-plugin
* Plugin Name:       Projects
* Plugin URI:        https://miweb.org/projects
* Description:       Projects
* Version:           1.0.0
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            Victorino Fernández Heredia
* Author URI:        https://www.victorino.org
* Text Domain:       project-slug
* License:           GPL v2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Update URI:        https://miweb.org/projects
*/

     
     defined('ABSPATH') or die('Hey Bro! you cannot access this file...twat');
     
     class Project{
         
         function __construct(){
             add_shortcode('vfh_show_main_fields', array($this, 'vfh_show_main_fields'));
             add_shortcode('vfh_show_all_fields', array($this, 'vfh_show_all_fields'));
             add_shortcode('vfh_show_categories', array($this, 'vfh_show_categories'));
             add_shortcode('vfh_show_tags', array($this, 'vfh_show_tags'));
         }
         
         function vfh_execute_actions(){
             //Registramos nuestro custom post type, projects
             add_action('init', array($this, 'vfh_register_projects'));
             
             //Crear la metabox donde vamos a insertar los CP fields
             add_action('add_meta_boxes', array($this, 'vfh_add_metabox'));
             
             //Guardar el contenido de los CPFields en la BBD
             add_action('save_post', array($this, 'vfh_save_custom_fields'));
             
             //Añadir hojas de estilo y js al front end de nuestro plugin
             add_action('wp_enqueue_scripts', array($this, 'vfh_front_enqueue_scripts'));
             add_action('wp_enqueue_scripts', array($this, 'vfh_front_css_injection'));
             
             
             //Añadir hojas de estilo y js al back end de nuestro plugin
             add_action('admin_enqueue_scripts', array($this, 'vfh_admin_enqueue_scripts'));
             
             //Añadimos una opcion en el menu del admin area para los settings del plugin
             add_action('admin_menu', array($this, 'vfh_projects_settings_menu'));
             
             
             //Registrar los settings de la pagina de settings de projects
             add_action('admin_init', array($this, 'vfh_projects_settings_register'));
             
             
             // Activamos el lanzamiento de errores de los settings
             add_action('admin_notices', array($this, 'vfh_projects_settings_notices'));
             
             
         }
         
         //Custom post type
         
         function vfh_register_projects(){
             //Registramos nuestro custom post type
             $supports = array(
                'title', //Activamos el panel para introducir el titulo
                'editor', //Activamos el editor para el contenido del post
                'excerpt', //Activamos el panel del excerpt
                'thumbnail', //Activamos el panel para la imagen representativa
                'author', //Activamos el panel para la seleccion del autor
                'comments', //Activamos el panel que permite indicar si queremos o no comentarios
              
              );
             $labels = array(
                'name' => _x('projects', 'plural'),
                'singular_name' => _x('project', 'singular'),
                'menu_name' => _x('projects', 'admin menu'),
                'menu_admin_bar' => _x('projects', 'admin bar'),
                'add_new' => _x('Add New project', 'add_new'),
                'all_items' => __('All projects'),
                'add_new_item' => __('Add New project'),
                'view_item' => __('View project'),
                'search' => __('Search project'),
                'not_found' => __('No project found...'),
              );
             $args = array(
                'supports' => $supports,
                'labels' => $labels,
                'public' => true, //hacemos visibles los custom post type tanto en el admin area como en el front end
                'wp_query' => true, //custom post type accesibles mediante la clase WP_Query
                'query_var' => true, //las variables de la query estarán disponibles en el loop de consulta de los custom post type
                'hierarchical' => false, //No tendremos tipos de posts derivados de este custom post type
                'show_in_rest' => true, //Editor Gutemberg
                //'has_archive' => true, //Nuestros custom post type posts aparecerán en la plantilla archive.php------------------------------------------ECHARLE UN OJOOOO-------------------------------------
                'rewrite' => array('slug' => 'projects'),
                'show_in_menu' => true, //Queremos que aparezca nuestro custom post type en el menu del amin area
                'menu_position' => 5, //Aparecerá la opcion debajo de la opcion de Entradas
                'menu_icon' => 'dashicons-block-default', //clase css del icono de dashicons para la opcion del menu
              );
              
              register_post_type('projects', $args);
              
              //Activar el panel de categorias de los posts normales
              // <taxonomia> <cpt>
            //   register_taxonomy_for_object_type('category', 'projects');
              //Activar el panel de tags de los posts normales
            //   register_taxonomy_for_object_type('post_tag', 'projects');
              //Definir categorias propias para el cpt
              register_taxonomy(
                    'projects-category', //El slug
                    'projects',  //nombre de registro del cpt
                    array(
                            'label' => 'projects Categories',
                            'rewrite' => array('slug' => 'projects-category'),
                            'show_in_rest' => true,
                            'query_var' => true,
                            'show_admin_column' => true, // Hace que aparezca una opcion en el menu del admin area relativo a los cpt
                            'hierarchical' => true, // Para usar la misma interface de las categorias de los posts normales
                        
                        ),
                  
                  );
              //Definir tags propios del cpt
              register_taxonomy(
                    'projects-tag', //El slug
                    'projects',  //nombre de registro del cpt
                    array(
                            'label' => 'projects Tags',
                            'rewrite' => array('slug' => 'projects-tag'),
                            'show_in_rest' => true,
                            'query_var' => true,
                            'show_admin_column' => true, // Hace que aparezca una opcion en el menu del admin area relativo a los cpt
                            'hierarchical' => false, // Para usar la misma interface de las categorias de los posts normales
                        
                        ),
                  
                  );
              
              
              flush_rewrite_rules(); //actualiza los permalinks
         }
         
         function vfh_add_metabox($screens){
            //En todas las pantallas donde aparezca mi CPT 
            $screens = array('projects');
            // <id de la metabox>, titulo de la metabox, <funcion del callback>, <pantalla>, <contexto>
            foreach($screens as $screen){
             add_meta_box('vfh_projects', 'Instruments projects Info', array($this, 'vfh_projects_metabox_callback'), $screen, 'advanced');
            }
         }
         
         /**
          * 
          * Callback function of add_meta_box where display CPFields with HTML tags
          * @param $post Object Post object
          */
         
         
         function vfh_projects_metabox_callback($post){
          //Aseguramos de que todas la peticiones se realizan desde nuestro sitio web mediante un campo nonce
          //Fichero que hace la peticion, nombre del campo nonce
            wp_nonce_field(basename(__FILE__), 'vfh_projects_nonce');
          
          //Data Harvesting 
            $rating = get_post_meta($post->ID, 'vfh_rating', true);
            $materials = get_post_meta($post->ID, 'vfh_materials', true);
            $price = get_post_meta($post->ID, 'vfh_price', true);
            $type = get_post_meta($post->ID, 'vfh_type', true);
            $color = get_post_meta($post->ID, 'vfh_color', true);
            $weight = get_post_meta($post->ID, 'vfh_weight', true);
            $brand = get_post_meta($post->ID, 'vfh_brand', true);
            $model = get_post_meta($post->ID, 'vfh_model', true);
            
            
            
            $custom_array_values = get_post_meta($post->ID, 'vfh_custom_array_field', true); //Para poder hacer el staff
          
          //Display fields with HTML tags
          
          ?>
          
            <div class="flex-metabox">
              
              <div class="flex-item item1">
                  <div class="generic">
                    <label for="vfh_rating">project Rating:</label>
                    <input type="number" step=".5" max="5" min="0" id="vfh_rating" name="vfh_rating" value="<?php echo $rating;?>">
                  </div>
                  <div class="generic">
                    <label for="vfh_materials">Materials:</label>
                    <input type="text" id="vfh_materials" name="vfh_materials" value="<?php echo $materials;?>">
                  </div>
                  <div class="generic">
                    <label for="vfh_price">Price:</label>
                    <input type="number" id="vfh_price" name="vfh_price" value="<?php echo $price;?>">
                  </div>
                  <div class="generic">
                    <label for="vfh_type">Type:</label>
                    <select id="vfh_type" name="vfh_type">
                     <option value="Choose a Type" <?php if($type == 'Choose a Type') echo 'selected' ;?> >Choose a Type</option>
                     <option value="Wood" <?php if($type == 'Wood') echo 'selected' ;?> >Wood</option>
                     <option value="Marble" <?php if($type == 'Marble') echo 'selected' ;?> >Marble</option>
                     <option value="Inox" <?php if($type == 'Inox') echo 'selected' ;?> >Inox</option>
                    </select>
                  </div>
                  <div class="generic">
                    <label for="vfh_color">Color:</label>
                    <input type="color" id="vfh_color" name="vfh_color" value="<?php echo $color;?>">
                  </div>
                  <div class="generic">
                    <label for="vfh_weight">Weight:</label>
                    <input type="number" id="vfh_weight" name="vfh_weight" value="<?php echo $weight;?>">
                  </div>
                  <div class="generic">
                    <label for="vfh_brand">Brand:</label>
                    <input type="text" id="vfh_brand" name="vfh_brand" value="<?php echo $brand;?>">
                  </div>
                 <div class="generic">
                    <label for="vfh_model">Model:</label>
                    <input type="text" id="vfh_model" name="vfh_model" value="<?php echo $model;?>">
                  </div>
              </div>
              <div class="flex-item item2">
                <h2>Staff</h2>
                <?php
                    require_once(plugin_dir_path(__FILE__).'inc/staff.php');
                ?>
              </div>
             
            </div>
            
          <?php
          
          
         }
         
         /**
          * 
          * Funcion del callback que guardará los CPFields de la project en la BBDD
          * @param $post_id Integer Post ID
          * 
          */
         
         function vfh_save_custom_fields($post_id){
             
             //Determinar si estamos en autosave
             $is_autosave = wp_is_post_autosave($post_id);
             
             //Determinar si estamos en revision
             $is_revision = wp_is_post_revision($post_id);
             
             //Determinar si el campo nonce es válido
             $is_valid_nonce = wp_verify_nonce($_POST['vfh_projects_nonce'], basename(__FILE__));
             
             if($is_revision || $is_autosave || !$is_valid_nonce){
                 return;
             }
             
             
             //Determinar si el usuario tiene permisos
             if(!current_user_can('edit_post', $post_id)){
                 return;
             }
             
             //Guardamos en la base de datos saneando los campos
             $rating = sanitize_text_field($_POST['vfh_rating']);
             $materials = sanitize_text_field($_POST['vfh_materials']);
             $price = sanitize_text_field($_POST['vfh_price']);
             $type = sanitize_text_field($_POST['vfh_type']);
             $color = sanitize_text_field($_POST['vfh_color']);
             $weight = sanitize_text_field($_POST['vfh_weight']);
             $brand = sanitize_text_field($_POST['vfh_brand']);
             $model = sanitize_text_field($_POST['vfh_model']);
             
            //  ------------------- staff ------------------------
            if(isset($_POST['vfh_custom_array_field'])){
                $array_aux = array();
                foreach($_POST['vfh_custom_array_field'] as $row){
                    //comprobamos que key1 y key2 no están vacios antes de añadirlos al array auxiliar
                    if(!empty($row['key1']) || !empty($row['key2'])){
                        $array_aux[] = array(
                                'key1' => sanitize_text_field($row['key1']),
                                'key2' => sanitize_text_field($row['key2']),
                            
                            );
                    }
                    
                }
                
                update_post_meta($post_id, 'vfh_custom_array_field', $array_aux);
            }
             
             
             
             update_post_meta($post_id, 'vfh_rating', $rating);
             update_post_meta($post_id, 'vfh_materials', $materials);
             update_post_meta($post_id, 'vfh_price', $price);
             update_post_meta($post_id, 'vfh_type', $type);
             update_post_meta($post_id, 'vfh_color', $color);
             update_post_meta($post_id, 'vfh_weight', $weight);
             update_post_meta($post_id, 'vfh_brand', $brand);
             update_post_meta($post_id, 'vfh_model', $model);
             
         }
         
         
        //  --------------------------------------------------------- plugin scripts -------------------------------------
         
         
         
         function vfh_front_enqueue_scripts(){
             wp_register_style('vfh_front_css', plugins_url('/admin/css/front.css', __FILE__));
             wp_enqueue_style('vfh_front_css');
         }
         
         /**
          * funcion que inyecta estilos en la hoja de estilos del front-end
          * 
          */
         
         function vfh_front_css_injection(){
             //Recogemos los settings
             $options = get_option('vfh_projects_settings');
             $color = $options['vfh_color'];
             $bg_color = '#0a0a0a';
             
             //guardamos en una varibale todos los estilos que queremos inyectar
             $styles = '
                .box1{
                    border: 1px solid'.$color.'
                }
                .box1::before{
                    color:'.$color.'
                }
                .box2{
                    border: 1px solid'.$color.'
                }
                .box3{
                    border: 1px solid'.$color.'
                }
                .box2::before{
                    color:'.$color.'
                }
                .data-staff h2{
                    color:'.$color.'
                }
                .box1::before {
                    background-color:'.$bg_color.'
                }
                .box2::before {
                    background-color:'.$bg_color.'
                }
                .box3::before {
                    background-color:'.$bg_color.'
                }
             ';
             //Registramos y ponemos en la cola los estilos a inyectar
             wp_register_style('vfh_css_injection', false);
             wp_enqueue_style('vfh_css_injection');
             //Inyectamos
             // <handler> <variable>
             wp_add_inline_style('vfh_css_injection', $styles);
         }
         
         
         
         function vfh_admin_enqueue_scripts(){
             wp_register_style('vfh_admin_css', plugins_url('/admin/css/admin.css', __FILE__));
             wp_enqueue_style('vfh_admin_css');
             
             wp_register_script('vfh_staff_js', plugins_url('/admin/js/staff.js', __FILE__));
             wp_enqueue_script('vfh_staff_js');
         }
         
         
         // -------------------------------------------------- settings -----------------------------
         
         function vfh_projects_settings_menu(){
            //  <titulo> <opcion del menu> <capacidades> <slug> <callback> <icono> <posicion>
             add_menu_page('Instruments projects Settings Page', 'projects Settings', 'manage_options', 'projects-settings', array($this, 'vfh_projects_settings_callback'), 'dashicons-admin-home' , 6);
         }
         
         function vfh_projects_settings_callback(){
             require_once(plugin_dir_path(__FILE__).'admin/admin-settings.php');
         }
         
         function vfh_projects_settings_register(){
             // <nombre del array del setting> <seccion del setting> <callback>
             register_setting('vfh_projects_settings', 'vfh_projects_settings', array($this, 'vfh_projects_settings_validation'));
         }
         
         
        /**
         * Funcion que valida los campos de los settings y establece un valor por defecto
         * @param $settings Array con los settings del plugin
         * return $settings
         */
         function vfh_projects_settings_validation($settings){
             if(!isset($settings['vfh_color'])){
                 $settings['vfh_color'] = "black";
             }
             
             if(!isset($settings['vfh_allow_rating'])){
                 $settings['vfh_allow_rating'] = 'yes';
             }
             
             if(!isset($settings['vfh_max_rating']) || $settings['vfh_max_rating'] < 0 || $settings['vfh_max_rating'] > 10){
                 $settings['vfh_max_rating'] = 5;
             }
             
             
             return $settings;
         }
         
         
         function vfh_projects_settings_notices(){
             settings_errors();
         }
         
         
         
        //  ------------------------------------------------------ shortcodes ---------------------------------
        
        function vfh_show_main_fields($atts){
            //Recogemos el atributo con el id del post
            $postid = shortcode_atts(
                    array(
                            'id' => 0, //valor que va a tomar por defecto el atributo si no lo especificamos en la invocacion
                        ),
                    $atts
                );
            $post_id = $postid['id'];
            ?>
            
            <div class="data-fields box1">
                <div class="field field1">Rating: </br><?php echo get_post_meta($post_id, 'vfh_rating', true);?></div>
                <div class="field field1">Materials: </br><?php echo get_post_meta($post_id, 'vfh_materials', true);?></div>
                <div class="field field1">Brand: </br><?php echo get_post_meta($post_id, 'vfh_brand', true);?></div>
                <div class="field field1">Type: </br><?php echo get_post_meta($post_id, 'vfh_type', true);?></div>
            </div>
            
            
            
            <?php
            
        }
         
         
         
        function vfh_show_all_fields($atts){
            $postid = shortcode_atts(
                    array(
                            'id' => 0, //valor que va a tomar por defecto el atributo si no lo especificamos en la invocacion
                        ),
                    $atts
                );
            $post_id = $postid['id'];
            ?>
            
            <div class="data-fields box1">
                <div class="field field1"><span>Rating: </span><span><?php echo get_post_meta($post_id, 'vfh_rating', true);?></span></div>
                <div class="field field2"><span>Materials:</span><span><?php echo get_post_meta($post_id, 'vfh_materials', true);?></span></div>
                <div class="field field3"><span>Price:</span><span><?php echo get_post_meta($post_id, 'vfh_price', true);?></span></div>
                <div class="field field4"><span>Type:</span><span><?php echo get_post_meta($post_id, 'vfh_type', true);?></span></div>
            </div>
            <div class="data-fields box2">
                <div class="field field5"><span>Color:</span><span><?php echo get_post_meta($post_id, 'vfh_color', true);?></span></div>
                <div class="field field6"><span>Weight:</span><span><?php echo get_post_meta($post_id, 'vfh_weight', true);?></span></div>
                <div class="field field7"><span>Brand:</span><span><?php echo get_post_meta($post_id, 'vfh_brand', true);?></span></div>
                <div class="field field8"><span>Model:</span><span><?php echo get_post_meta($post_id, 'vfh_model', true);?></span></div>
            </div>
            <!--contenido para campos variables staff (no necesario para mi custom post type)-->
            <div class="data-staff box3">
                <h2>Staff</h2>
                
                <div class="fila fila1 staff-row">
                    <span class="lbl col1">Charge:</span>
                    <span class="lbl col2">Name:</span>
                </div>
            
            
            
            <?php
            $custom_array_values = get_post_meta($post_id, 'vfh_custom_array_field', true);
            if(!empty($custom_array_values)){
                foreach($custom_array_values as $row){
                    echo '<div class="staff-row">';
                    echo '<div class="lbl key1">'.$row['key1'].'</div>';
                    echo '<div class="lbl key2">'.$row['key2'].'</div>';
                    echo '</div>';
                    
                }
            }
            ?>
            
            </div>
            <?php
            
            
        }
        
        
        
        function vfh_show_categories($atts){
            //Recogemos el atributo con el id del post
            $postid = shortcode_atts(
                    array(
                            'id' => 0, //valor que va a tomar por defecto el atributo si no lo especificamos en la invocacion
                        ),
                    $atts
                );
            $post_id = $postid['id'];
            
            
            //Recorrer la taxonomia de las categorias y dibujarlas con las clases css correspondientes
            
            $categories = get_the_terms($post_id, 'projects-category');  //Devuelve un array
            
            if (!empty($categories)) {
                echo '<div class="tt-bci-categories">';
                
                $total_categories = count($categories);
                $counter = 1;
            
                foreach ($categories as $category) {
                    echo '<a href="' . get_term_link($category->term_id) . '" rel="category tag">' . $category->name . '</a>';
            
                    // Agregar "&" solo si no es el último elemento
                    if ($counter < $total_categories) {
                        echo ' &amp; ';
                    }
            
                    $counter++;
                }
            
                echo '</div>';
            }
            
            
            
        }
        
        function vfh_show_tags($atts){
            //Recogemos el atributo con el id del post
            $postid = shortcode_atts(
                    array(
                            'id' => 0, //valor que va a tomar por defecto el atributo si no lo especificamos en la invocacion
                        ),
                    $atts
                );
            $post_id = $postid['id'];
            
            
            $tags = get_the_terms($post_id, 'projects-tag');  //Devuelve un array
            
            if(!empty($tags)){
                foreach($tags as $tag){
                    echo '<span><a href="'.get_term_link($tag->term_id).'">'.$tag->name.'</a></span>';
                
                
                }
            }
            
            
        }

     }
     
     if(class_exists('project')){
         //Instanciar un objeto de la clase para encapsular todas nuestras funciones
         $project = new project();
         //invocamos al método de nuestra clase que desencadena todas las acciones
         $project->vfh_execute_actions();
         
         
         
         //Le tenemos que registrar a nuestro plugin dos nuevos hooks que se ejecutaran cuando activemos y desactivemos
         
         
     }
     
     
     ?>