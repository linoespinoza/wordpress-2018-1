<?php

// Creando una función llamada enqueue_styles
function enqueue_styles() {
	/* Inyecta un archivo css dentro de nuestro tema
	*
	* @param Nombre del Archivo (que nosotros definimos)
	* @param Ruta del Archivo css en cuestión
 	*/
	wp_enqueue_style('style-main.css', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('style-ie9.css', get_template_directory_uri() . '/assets/css/main.css');
}

// Hook: 
add_action('wp_enqueue_scripts', 'enqueue_styles');









function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


?>