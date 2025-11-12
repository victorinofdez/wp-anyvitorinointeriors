<h1>projects Settings</h1>
<div>
    <h2>Como usar los shortcodes para visualizar los campos de la project en el Front-end</h2>
    <h4>Copia este código para visualizar un resumen de los campos en la plantilla índice de projects</h4>
    <blockquote>
        <h4><pre>&lt;?php do_shortcode("[vfh_show_main_fields id=".$post->ID."]");?&gt;</pre></h4>
    </blockquote>
    <h4>Copia este código para visualizar todos los campos en la plantilla donde se consulta la project en su totalidad</h4>
    <blockquote>
        <h4><pre>&lt;?php do_shortcode("[vfh_show_all_fields id=".$post->ID."]");?&gt;</pre></h4>
    </blockquote>
    
    <h4>Copia este código para visualizar las categorias del Custom Post Type</h4>
    <blockquote>
        <h4><pre>&lt;?php do_shortcode("[vfh_show_categories id=".$post->ID."]");?&gt;</pre></h4>
    </blockquote>
    <h4>Copia este código para visualizar los tags del Custom Post Type</h4>
    <blockquote>
        <h4><pre>&lt;?php do_shortcode("[vfh_show_tags id=".$post->ID."]");?&gt;</pre></h4>
    </blockquote>
</div>
<h2>Lista de parámetros</h2>
<form method="post" action="options.php">
    <?php
        
        settings_fields('vfh_projects_settings');
        do_settings_sections('vfh_projects_settings');
    
        //Recogemos los valores de los settings grabados en la bbdd
        $options = get_option('vfh_projects_settings');
        
        $yeschecked = '';
        $nochecked = '';
        if($options['vfh_allow_rating'] == 'yes'){
            $yeschecked = "checked";
        }else{
            $nochecked = "checked";
        }
    
    ?>
    
    
    <p>
        <label for="vfh_color">Color Front-End:</label>
        <input type="color" name="vfh_projects_settings[vfh_color]" id="vfh_color" value="<?php echo $options['vfh_color'] ;?>">
    </p>
    <p>
        <label for="vfh_allow_rating">Allow Rating:</label>
        <input type="radio" name="vfh_projects_settings[vfh_allow_rating]" id="vfh_allow_rating" value="yes" <?php echo $yeschecked ;?>>YES &nbsp; &nbsp;
        <input type="radio" name="vfh_projects_settings[vfh_allow_rating]" id="vfh_allow_rating" value="no" <?php echo $nochecked ;?>>NO
    </p>
    <p>
        <label for="vfh_max_rating">Max Rating Value:</label>
        <input type="number" id="vfh_max_rating" max="10" min="0" step="1" name="vfh_projects_settings[vfh_max_rating]" value="<?php echo $options['vfh_max_rating'] ;?>">
    </p>
    <p>
        <input type="submit" class="button button-primary" value="Save Settings"> 
    </p>
    
    
</form>