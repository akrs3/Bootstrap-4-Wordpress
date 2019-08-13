<?php 

// chamar tag Title
function bs4wp_title_tag() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'bs4wp_title_tag');

// previnir o erro na tag title em versões antigas
if (function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title(){
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}

// Registra o custom navigation walker
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory . '/class-wp-bootstrap-navwalker.php';
}

//Registrar os Menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'bs4-wp')
));


?>