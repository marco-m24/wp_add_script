function mrc_adding_script() {
    wp_enqueue_script( 'mrcscript', get_stylesheet_directory_uri() . '/js/mrcscript.js', array( 'jquery', 'jquery-ui-accordion'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mrc_adding_script' );  
