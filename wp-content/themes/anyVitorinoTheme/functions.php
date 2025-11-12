<?php

/*
 * que vamos a hacer
 * @param parametros de la función
 * que es lo que tiene
 * @return si devuelve algo
 */
function add_theme_scripts() {

    // Add main CSS stylesheet
    wp_enqueue_style('main-styles', get_stylesheet_uri()); // Ruta que WP te proporciona de donde está la hoja de estilos principal
    wp_enqueue_style('dashicons');


    // Add all the CSS stylesheets
    wp_enqueue_style('helper', get_template_directory_uri() . '/assets/css/helper.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/vendor/normalize/normalize.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/fontawesome-all.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/css/swiper-bundle.min.css');
    wp_enqueue_style('lightgallery', get_template_directory_uri() . '/assets/vendor/lightgallery/css/lightgallery.min.css');


    // Add all the JS script fiels             // <handler>, <path>, <dependencies>, <infooter>
    // jQuery
    wp_register_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    // GSAP
    wp_register_script('gsap', get_template_directory_uri() . '/assets/vendor/gsap/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap');

    // ScrollToPlugin
    wp_register_script('ScrollToPlugin', get_template_directory_uri() . '/assets/vendor/gsap/ScrollToPlugin.min.js', array(), null, true);
    wp_enqueue_script('ScrollToPlugin');

    // ScrollTrigger
    wp_register_script('ScrollTrigger', get_template_directory_uri() . '/assets/vendor/gsap/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('ScrollTrigger');

    // Smooth Scrollbar
    wp_register_script('smooth-scrollbar', get_template_directory_uri() . '/assets/vendor/smooth-scrollbar.js', array(), null, true);
    wp_enqueue_script('smooth-scrollbar');

    // Swiper
    wp_register_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('swiper');

    // ImagesLoaded
    wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/isotope/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('imagesloaded');

    // Isotope
    wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('isotope');

    // Packery Mode
    wp_register_script('packery-mode', get_template_directory_uri() . '/assets/vendor/isotope/packery-mode.pkgd.min.js', array(), null, true);
    wp_enqueue_script('packery-mode');

    // LightGallery
    wp_register_script('lightgallery', get_template_directory_uri() . '/assets/vendor/lightgallery/js/lightgallery-all.min.js', array(), null, true);
    wp_enqueue_script('lightgallery');

    // jQuery Mousewheel
    wp_register_script('jquery-mousewheel', get_template_directory_uri() . '/assets/vendor/jquery.mousewheel.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-mousewheel');

    // Template master JS
    wp_register_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), null, true);
    wp_enqueue_script('theme');
    
    wp_register_script( 'init-masonry', get_stylesheet_directory_uri() . '/assets/js/init-masonry.js', array(), array('masonry'), true );
    wp_enqueue_script('init-masonry');
    
    
    

    

}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

// aqui vamos a indicarle a nuestro tema que se prepare "darle soporte al tema" para poder poner imagenes destacadas
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

 /**
 * Devuelve un objeto de tipo página basandose en el título de la página
 * @param $title String Título de página
 * @return $page Object  Objecto de tipo Página
 **/
function get_page_object($title) {
    $query = new WP_Query(
        array(
            'post_type'              => 'page',     // esto le indica a la base de datos que devuelva los post de tipo página
            'title'                  =>  $title,    // filtra la pagina con el titulo que le pasamos por parametro 
            'post_status'            => 'publish',  // estado de la página [publicado,borrador, en vista de ser creada...], esto hay que tener cuidado ya que si está en 'all' devuelve el id de la página aun que esté borrada
            'posts_per_page'         => 1,          // para evitar lo de antes, borrar y crear paginas con el mismo título
            'no_found_rows'          => true,
            'ignore_sticky_posts'    => true,
            'update_post_term_cache' => false,
            'update_post_meta_cache' => false,
            'orderby'                => 'post_date ID',
            'order'                  => 'ASC',
        )
    );

    if ( ! empty( $query->post ) ) {
        $page = $query->post;
    } else {
        $page  = null;
    }
    return $page;
}


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

/**
* Registramos nuestro área de widgets en el sidebar
*/
   function register_widget_zone() {
    //Registramos nuestro area de widgets en el sidebar que hemos llamado Sidebar Widgets
    $args = array (
            'name' => 'Sidebar Widgets',    
            'id' => 'sidebar-widgets',
            'description' => 'Sidebar Widgets Area',
            'before_widget' => '<div class="sidebar-widget">', // esto es para meter los widget en un div para aplicarle estilos propios
            'after_widget' => '</div>',
            );
        register_sidebar( $args );
    }
    
    add_action('widgets_init','register_widget_zone');
    
    


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

/*
 * recoger el numero de visitas que llevamos
 * @param post_id
 * 
 * @return string numero de visitas
 */
 
 function get_num_visits( $post_id ) {
     $numVisits = get_post_meta( $post_id, 'numVisits', true);
     if(!$numVisits) $numVisits = 0;
     if ($numVisits ==1 ) { 
         return $numVisits.' visit';
     }else{
         return $numVisits.' visits';
     }
 }

/*
 * sumar 1 al contador de visitas
 * @param post_id
 * @return string numero de visitas
 */
 function add_num_visits($post_id){
     $numVisits = get_post_meta( $post_id, 'numVisits', true); 
     if ($numVisits == 0 ) { 
         add_post_meta($post_id, 'numVisits', 1, true);// si el campo no existe lo creamos con valor 1
     }else{
         $numVisits++;
         update_post_meta($post_id, 'numVisits', $numVisits);// si el campo no existe lo creamos con valor 1
     }
 }


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

function get_list_tags( $limit ) {
    $args = array(
        'number' => $limit,// Como máximo devuelve $limit tags
        'orderby' => 'count',//Ordenados los tags por el número de posts
        'order' => 'DESC', // De más usada a menos usada
        );
    $tags = get_tags( $args ); //Devuelve una coleccion de objetos tipo tag con todos los tags del blog
    foreach( $tags as $tag) {
        echo '<li><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'<span class="bedge pull-rigth">'.$tag->count.'</span></a></li>';
    }
}


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

/************************************************* Autores *************************/
 
 /**
  * Det the author role with a given author_id
  * @param int $author_id author id
  */
function get_author_role( $author_id){
    // Obtener el objeto de tipo autor con ese id
    $author = get_userdata( $author_id );
    //Almacenamos el array con los roles de ese autor
    $roles = $author->roles;
    // Devolvemos el array como un string con elementos separados por comas
    return implode(', ', $roles);
}
 
 
 
/**
  * Add social media fields to user profile
  * @param $user_methods array User profile fields -> Nos lo da el hook user_contactmethods
  * @return $user_methods array User profile fields -> El mismo array pero ya con los nuevos campos
  */
function add_social_media_fields( $user_methods){
    // $user_methods['<nombre del campo>'] = '<label del campo>';
    $user_methods['facebook'] = 'Facebook';
    $user_methods['twitter'] = 'Twitter';
    $user_methods['instagram'] = 'Instagram';
    $user_methods['linkedin'] = 'Linkedin';
    return $user_methods;
}
add_action('user_contactmethods', 'add_social_media_fields');

function add_enctype_attr_to_form(){
    echo 'enctype=multipart/form-data';
}
add_action('user_edit_form_tag', 'add_enctype_attr_to_form');




// /**
// * Añadir skills en el perfil del usuario
// * @param $user user object Nos lo proveen dos hooks ('show_user_profile' y 'edit_user_profile')
// * 
// */

function add_user_skills_info($user){
    //Dibujamos los campos de las skills con etiquetas html
    
    // Comprobar que tenemos una rura en el campo user_pic previa en el caso contrario visualizamos subir a la nube
    if( !empty( get_user_meta( $user->ID, 'user_pic', true)) ){
        $src = get_user_meta( $user->ID, 'user_pic', true);
    }else{
        $src = get_template_directory_uri().'/assets/images/transparente.png';
    }
    
    ?>
    <h3>User profile pic</h3>
    <div class="flex-profile-pic">
        <input type="file" id="user_pic" name="user_pic"/>
    </div>
    <div>
        <img src="<?php echo $src?>" id="previewImg" height="200">
        <p>Ruta: <?php echo $src?></p>
    </div>
    <h3>User skills information</h3>
    <table class="form-table">
        <tr>
            <th><label for="skill1">Skill1</label></th>
            <td><input type="text" id="skill1" name="skill1" value="<?php echo get_user_meta($user->ID, 'skill1', true); ?>"></td>
            <th><label for="skill1V">Skill1 Value</label></th>
            <td><input type="text" id="skill1V" name="skill1V" value="<?php echo get_user_meta($user->ID, 'skill1V', true); ?>"></td>
        </tr>
        
        <tr>
            <th><label for="skill2">Skill2</label></th>
            <td><input type="text" id="skill2" name="skill2" value="<?php echo get_user_meta($user->ID, 'skill2', true); ?>"></td>
            <th><label for="skill2V">Skill2 Value</label></th>
            <td><input type="text" id="skill2V" name="skill2V" value="<?php echo get_user_meta($user->ID, 'skill2V', true); ?>"></td>
        </tr>
        
        <tr>
            <th><label for="skill3">Skill3</label></th>
            <td><input type="text" id="skill3" name="skill3" value="<?php echo get_user_meta($user->ID, 'skill3', true); ?>"></td>
            <th><label for="skill3V">Skill3 Value</label></th>
            <td><input type="text" id="skill3V" name="skill3V" value="<?php echo get_user_meta($user->ID, 'skill3V', true); ?>"></td>
        </tr>
        
        <tr>
            <th><label for="skill4">Skill4</label></th>
            <td><input type="text" id="skill4" name="skill4" value="<?php echo get_user_meta($user->ID, 'skill4', true); ?>"></td>
            <th><label for="skill4V">Skill4 Value</label></th>
            <td><input type="text" id="skill4V" name="skill4V" value="<?php echo get_user_meta($user->ID, 'skill4V', true); ?>"></td>
        </tr>
    </table>
    
    
    
    <?php
}

add_action('show_user_profile','add_user_skills_info');
add_action('edit_user_profile','add_user_skills_info');



// /**
// * Guardar skills en el perfil
// * @param $user_id user object  Nos lo proveen dos hooks ('show_user_profile' y 'edit_user_profile')
// * 
// */
function save_skills($user_id){
    //Guardar laa foto de perfil en la carpeta TEAM y actualizar en su campo la url de la foto
    $user_info = get_userdata( $user_id ); // recogemos los datos del usuario en cuestion
    $user_name = $user_info->user_login;//Nos quedamos con el nombre con el qu ehace logim ese usuario
    //Comprobamos si el archivo se ha subido bien al server
    if ( $_FILES['user_pic']['error'] == UPLOAD_ERR_OK ) {
        //Se ha subido bien el archivo a la carpeta limbo
        $upload_dir = wp_upload_dir();// array con diversas estructuras de URL de la ruta solicitada
        $subdir = "/team/";// subdirectorio donde voy a colocar las fotos subidas
        $upload_path = $upload_dir['basedir'].$subdir;
        $file_name = $user_name.'-'.$_FILES['user_pic']['name'];// Componemos un nombre único para el archivo
        $file_temp = $_FILES['user_pic']['tmp_name'];
        $file_dest = $upload_path.$file_name;// Ruta LOCAL completa del archivo destino
        
        if ( move_uploaded_file( $file_temp, $file_dest ) ) {
            //El archivo se ha movido bien desde la carpeta limbo a nuestra carpeta team
            //Actualizamos el metadato del perfil fel usuario con la url de la foto
            $upload_dir = wp_get_upload_dir();
            $file_url = $upload_dir['baseurl'].$subdir.$file_name;
            update_user_meta( $user_id, 'user_pic', $file_url );
        }else{
            //Ha habido un error y no se ha podido traer el archivo desde la carpeta limbo
            //Mostramos el error
            $pic_error = "<strong>ERROR!<strong>:Something bad happens, the pic could not be loaded...";
            update_user_meta( $user_id, 'user_pic', $pic_error );
        }
    }
    
    //hacer el update de los metadatos
    update_user_meta($user_id, 'skill1', $_POST['skill1']);
    update_user_meta($user_id, 'skill1V', $_POST['skill1V']);
    
    update_user_meta($user_id, 'skill2', $_POST['skill2']);
    update_user_meta($user_id, 'skill2V', $_POST['skill2V']);
    
    update_user_meta($user_id, 'skill3', $_POST['skill3']);
    update_user_meta($user_id, 'skill3V', $_POST['skill3V']);
    
    update_user_meta($user_id, 'skill4', $_POST['skill4']);
    update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
}

add_action('personal_options_update','save_skills');
add_action('edit_user_profile_update','save_skills');


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/

/*------------------------------------------------------------------------------Comments-------------------------------------------------*/
/**
* Remove website input from comment form
* @param $fields array con la lista de campos del form_> nos lo suministra el hook_comment form_default fields
* @reutrn $fields array
*/
function delete_url_from_comment_form($fields){
    unset ($fields['url']);
    return $fields;
}
add_action('comment_form_default_fields','delete_url_from_comment_form');

/**
* Reorder comment fields form
* @param $fields array con la lista de campos del form-> nos lo suministra el hook_comment form__fields
* @reutrn $fields array
*/
function reorder_comment_form_fields( $fields ){
    //Comprobar si el usario esta logueado
    if(!is_user_logged_in() ){
        
        $aux = array();
        array_push( $aux, $fields['author'] );
        array_push( $aux, $fields['email'] );
        array_push( $aux, $fields['comment'] );
        array_push( $aux, $fields['cookies'] );
        array_push( $aux, $fields['consent'] );
        
        return $aux;
    } else {
        return $fields;
    }
}
add_action('comment_form_fields','reorder_comment_form_fields');
/**
* Add consent field form Policy and Privacy to the RGPD
* @param $fields array con la lista de campos del form_> nos lo suministra el hook_comment form_default fields
* @reutrn $fields array
*/
function add_consent_field( $fields ){
    $fields ['consent'] = '<p>
                            <input type="checkbox" name="consent" id="consent">
                            <label>Marca esta casilla para darnos permiso para publica tu comentario. Con esto aceptas nuestra <a href="'.get_page_link(get_page_object('Política de privacidad')->ID).'">politica de privacidad.</a></label>
                          </p>';
    return $fields;
}
add_action('comment_form_default_fields','add_consent_field');
/**
* Save consent field into DB
* @param $comment_id integer id from comment-> from hook comment_post
* @return $fields array
*/
function save_consent_field( $comment_id ){
   $consent_value = $_POST['consent'];
   
   if ($consent_value){
       //El checkbox ha sido marcado
       $valor= "Consent checkbox checked. I accept the privacy policy.";
   } else {
       //El checkbox NO ha sido marcado
       if( is_user_logged_in() ){
           //Usuario esta logueado,no aparece el checkbox,pero hay que guardar el consentimiento
           $valor= "Logged User.Privacy Policy ahve been already accepted.";
       } else {
           $valor= "Consent checkbox NOT checked.I do not accept the privacy policy.";
       }
   }
   
   add_comment_meta($comment_id, 'consent', $valor, true);
}
add_action('comment_post','save_consent_field');
/**
* Create column consetn in back-end in comments
* @param $columns array List of columns from back-end comments-> from hook manage_edit-comments_columns
* @return $columns array
*/
function create_consent_column( $columns ){
    //Modificar el array $columns para incorporar el nuevo campo de cconsentimiento
    $columns = array(
         'cb' => '<input type"checkbox">',
         'author' => 'Autor',
         'comment' => 'Comentario',
         'consent' => 'Consentimiento',
         'response' => 'En respuesta a',
         'date' => 'Fecha del comentario',
    );
    
    return $columns;
    
}
add_action('manage_edit-comments_columns','create_consent_column');
/**
* Show consent in the column we have recetn created in back-end
* @param $column string-> supply hook manage_comments_custom_column
* @param $comment_id integer
*/
function display_consent_column( $column, $comment_id ){
    //Identify the conssent column
    if($column == 'consent'){
        echo get_comment_meta( $comment_id, 'consent', true);
    }
}
add_action('manage_comments_custom_column','display_consent_column',1,2);


/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/


 /************************************************* Custom login *************************/

/**
  * Customize Login LOGO
  * 
  */
function custom_login_logo(){
    ?>
        <style>
            #login h1 a, .login h1 a {
                background-image: url("<?php echo get_template_directory_uri();?>/assets/img/logo-light.png");
                background-size: contain;
                background-position: center center;
                width: 300px;
            }
            
            .login {
                background-color: #0a0a0a;
                background-size: cover;
                background-position: center center;
            }
        </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');

/**
  * Redirect Login LOGO url
  * 
  */
function redirect_login_logo_url(){
    return home_url("/");//Redirigimos al sitio raiz
}
add_filter('login_headerurl','redirect_login_logo_url');

/**
  * Customize login error
  * 
  */
function custom_login_error(){
    return "Ooooooops! you must enter a valid username and password..";
}
add_filter('login_errors','custom_login_error');



/*---------------------------------------------------------------------SHORTCODES------------------------------------------------------------------------*/
/**
* 
* @param $column string-> supply hook manage_comments_custom_column
* @param $comment_id integer
*/
function insert_br(){
    return '<br />';
}
add_shortcode('br', 'insert_br');


function custom_single_template($single_template) {
    global $post;

    // Verificar si la entrada pertenece a la plantilla 'projects'
    if ($post->post_type == 'projects') {
        $single_template = dirname(__FILE__) . '/single-projects.php';
    }
    return $single_template;
}
add_filter('single_template', 'custom_single_template');

function saludo_shortcode($atts) {
    $message = shortcode_atts(array('message' => 'Bla bla bla'), $atts);
    
    return $message['message'];
}
add_shortcode('message', 'saludo_shortcode');
/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------------------------------------------------*/



