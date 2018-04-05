<?php

// Creando una función llamada enqueue_styles para inyectar
function enqueue_styles() {
	/* Inyecta un archivo css dentro de nuestro tema
	*
	* @param Nombre del Archivo (que nosotros definimos)
	* @param Ruta del Archivo css en cuestión
 	*/

	wp_enqueue_style('main.css', get_template_directory_uri() . '/assets/css/main.css');
	
	wp_enqueue_style('ie9.css', get_template_directory_uri() . '/assets/css/ie9.css');
	wp_style_add_data('ie9.css', 'conditional', 'lte IE 9');

	wp_enqueue_style('ie8.css', get_template_directory_uri() . '/assets/css/ie8.css');
	wp_style_add_data('ie8.css', 'conditional', 'lte IE 8');

	wp_enqueue_style('open-sans-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false ); 

}
// Hook: 
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Creando una función llamada enqueue_scripts para inyectar mis archivos js
function enqueue_scripts() {
	
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true);
	wp_enqueue_script('jquery-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), '', true);
	wp_enqueue_script('jquery-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), '', true);
	wp_enqueue_script('skel', get_template_directory_uri() . '/assets/js/skel.min.js', array(), '', true);
	wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), '', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
	wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/ie/respond.min.js', array(), '', false);
 	wp_script_add_data('respond', 'conditional', 'lte IE 8');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');



function add_noscript_filter($tag, $handle, $src){
    // as this filter will run for every enqueued script
    // we need to check if the handle is equals the script
    // we want to filter. If yes, than adds the noscript element
    if ( 'script-handle' === $handle ){
        $noscript = '<noscript>';
        // you could get the inner content from other function
        $noscript .= '<p>this site demands javascript</p>';
        $noscript .= '</noscript>';
        $tag = $tag . $noscript;
    }
        return $tag;
}
// adds the add_noscript_filter function to the script_loader_tag filters
// it must use 3 as the last parameter to make $tag, $handle, $src available
// to the filter function
add_filter('script_loader_tag', 'add_noscript_filter', 10, 3);


/*
 * Se registra una area de widgets llamada Widget Area 1, con id = widget-area-1 
 * 
*/
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Widget Area 1',
		'id' => 'widget-area-1',
		'description' => 'Esta es el area de Widget #1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>'
	));

	register_sidebar(array(
		'name' => 'Widget Area 2',
		'id' => 'widget-area-2',
		'description' => 'Esta es el area de Widget #2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>'
	));
}


?>