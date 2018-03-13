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
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '', trye);
	wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/ie/respond.min.js', array(), '', true);
 	wp_script_add_data('respond', 'conditional', 'lte IE 8');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');




?>