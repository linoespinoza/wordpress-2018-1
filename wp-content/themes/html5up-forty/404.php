<?php
// Obtiene el contenido del archivo header.php del tema actual
get_header(); 
?>

Estoy usando el archivo 404.php

<img src="<?php echo get_template_directory_uri() . '/images/error-404.png'; ?>">

<?php 
// Obtiene el contenido del archivo header.php del tema actual
get_footer(); ?>