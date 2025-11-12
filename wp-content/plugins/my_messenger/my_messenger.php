<?php
 /**
     * Plugin Name
     *
     * @package           Tell a message
     * @author            Victorino Fernández Heredia
     * @copyright         2023 AnyVitorino
     * @license           GPL-2.0-or-later
     *
     * @wordpress-plugin
     * Plugin Name:       Message of the Day
     * Plugin URI:        https://neomode.org/adventures
     * Description:       Tells a message to every user depending of the rol.
     * Version:           1.0.0
     * Requires at least: 5.2
     * Requires PHP:      7.2
     * Author:            Victorino Fernández Heredia
     * Author URI:        https://anyvitorino.org
     * Text Domain:       my-messenger-slug
     * License:           GPL v2 or later
     * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
     * Update URI:        https://anyvitorino.org/
     */
     defined('ABSPATH') or die('Oye! No puedes acceder a este fichero.Venga crack pa tu casa.');
     
     class My_Messenger {
         
         function __construct(){
            add_shortcode('vfh_show_message', array($this, 'vfh_show_message') );
         }
         
         function vfh_execute_actions(){
             //Registrar nuestro custom post type
             add_action('init', array( $this, 'vfh_register_messenger') );//cuando carga la pagina salta
             
             //CSS
             add_action('wp_enqueue_scripts', array($this,'vfh_front_enqueue_scripts'));
             
             //Crear una metabox para añadir fecha de caducidad del mensaje
             add_action('add_meta_boxes', array($this,'vfh_add_metabox') );
             
             //Guardamos
             add_action('save_post', array($this,'vfh_save_metabox') );
         }
         
         function vfh_register_messenger(){
            $supports = array(
                'title',
                'editor',
                'thumbnail'
            );
            $label = array(
                'name' => _x('Message', 'plural'),
                'singular_name' => _x('Message', 'singular'),
                'menu_name' => _x('Messages', 'admin menu'),
                'menu_admin_bar' => _x('Messages', 'admin bar'),
                'add_new' => _x('Add New Messages', 'add_new'),
                'all_items' => __('All Messages'),
                'add_new_item' => __('Add New Message'),
                'view_item' => __('View Message'),
                'search' => __('Search Message'),
                'not_found' => __('No message found...'),
            );
            $args = array(
                'supports' => $supports,
                'labels' => $labels,
                'label' => 'Message of the Day',
                'public' => true,
                'query_var' => true,
                'show_in_rest' => true,
                'show_in_menu' => true,
                'menu_position' => 7,
                'menu_icon' => 'dashicons-format-status'
            );
             register_post_type( 'vfh_message', $args);
             
             //Registrar los autores como nueva Taxonomia de CPT
             
             register_taxonomy(
                'to', 
                'vfh_message',
                array(
                    'hierarchical' => true,
                    'label' => 'To:',
                    'rewrite' => array( 'slug' => 'to'),
                    'show_in_rest' => true,
                    'show_admin_column' => true,
                    'query_var' => true,
                    
                ),
            );
            //Insertar los roles mas ALL como taxonomias tipo categorias
            $terms = ['All Users', 'Administrator', 'Editor', 'Author', 'Collaborator','Subscriptor'];
            
             foreach( $terms as $term){
             wp_insert_term( $term, 'to');
             }
            
             flush_rewrite_rules();
         }
         
         function vfh_show_message( $atts ){
              $authorid = shortcode_atts( array(
                'id' => 0, //Valor que va a tomar por defecto
                ), $atts
            );
            $author_id = $authorid['id'];
            $rol = trim(implode('', get_userdata($author_id)->roles) );
            
            if(is_user_logged_in() ){
                $args = array(
                    'post_per_page' => 1,
                    'post_type' => array('vfh_message'),
                    'tax_query' => array(
                        array(
                            //Que concepto vamos a buscar
                            'taxonomy' => 'to',
                            //En que campo del post me voy a basar para la consulta
                            'field' => 'slug',
                            //Por que valor voy a buscar 
                            'terms'=> $rol,
                            //Que vamos a hacer con los mensajes anteriores,si INCLUIRLOS o EXCLUIRLOS de la consulta
                            'operator' => 'IN'
                        )
                    ),
                );
                $msg = new WP_Query ( $args );
                
                if( $msg->have_posts()){
                    $msg-> the_post();
                    
                    // Obtenemos el id del post porque no está en la propuedad ID del objeto $post
                    $post_id = get_the_id();
                    
                    // establecemos un huso horario
                    date_default_timezone_set('Europe/Berlin');
                    // obtener la fecha y hora actuales
                    $today = new DateTime();
                    $today_esp = $today->format('d-m-Y H:i');// devuelve un string
                    $today_date = new DateTime($today_esp);
                    
                    $exp_date = get_post_meta($post_id, 'exp_date', true);
                    $exp_date_format = new DateTime($exp_date);
                    
                    $interval = $today_date->diff($exp_date_format);
                    
                    
                    if( has_post_thumbnail() ){
                      $postIMG = get_the_post_thumbnail_url();
                    } else {
                      $postIMG = get_template_directory_uri().'/assets/img/logo-light.png'; //Esta bien
                    }
                    
                    
                    if($interval->invert == 0){
                        
                        
                        
            ?>
                    <div class="motd-box">
                        <div class="message-pic" style="background-image:url(<?php echo $postIMG; ?>)"></div>
                        <div class="message-content">
                             <h3><?php the_title();?></h3>  
                            <p><?php the_content();?></p>
                        </div>
                    </div>
            <?php
                    } else {
                    
                        echo "<h2>No hay noticias para ".$rol."!</h2>";
                        
                    }
                    
                } else {
                    echo "<h2>No hay noticias para ".$rol."!</h2>";
                }
                
            }
            
            
         }
         function vfh_front_enqueue_scripts(){
            wp_register_style('vfh_front_css', plugins_url('/vfh_front.css', __FILE__) );
            wp_enqueue_style('vfh_front_css');
         }
         
         function vfh_add_metabox( $screens ){
             $screens = array('vfh_message'); //Filtrar por nombre de la CPT
             foreach($screens as $screen){
                 add_meta_box('vfh-message-metabox', 'Message Details', array($this, 'vfh_message_metabox_callback'), $screen, 'advanced');
             }
         }
         
         function vfh_message_metabox_callback(){
             //Crear compo nonce
             wp_nonce_field( basename(__FILE__), 'vfh-message-nonce');
             
             //Harvesting
             $expired_date= get_post_meta($post->ID, 'exp_date', true);
             if(!$expired_date ){
                 $expired_date = '';
             }
             
             //Dibujamos con HTML
             ?>
                 <div class="custom-field">
                     <label for="exp_date">Expiration Date:</label>
                     <input type="datetime-local" id="exp_date" name="exp_date" value="<?php echo $expired_date; ?>"/>
                 </div>
             <?php
         }
         
         function vfh_save_metabox( $post_id ){
             // Determinar si estamos en autosave
            $is_autosave = wp_is_post_autosave( $post_id );
            // Determinar si no estamos en autorevisión
            $is_revision = wp_is_post_revision( $post_id );
            //Campo Nonce es válido 
            $is_valid_nonce = wp_verify_nonce($_POST['vfh-message-nonce'], basename(__FILE__) );
            
            if( $is_revision || $is_autosave || !$is_valid_nonce){
                return;
            }
            
            //Determinar si el usuario tiene permisos
            if( !current_user_can('edit_post', $post_id) ){
               return; 
            }
            
            //Sanear
            $expired_date = sanitize_text_field($_POST['exp_date']);
            
            //Guardamos
            update_post_meta($post_id, 'exp_date', $expired_date);
         }
     }
     if( class_exists( 'My_Messenger' ) ){
         $my_message = new My_Messenger();
         
         $my_message->vfh_execute_actions();
     }