<?php
// Obtiene el contenido del archivo header.php del tema actual
get_header(); 
?>

Estoy usando el archivo page.php

<?php // The Loop (Wordpress) ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<h1><?php echo the_title(); ?></h1>

    	<?php echo the_content(); ?>
    	<hr>
    <?php endwhile; ?>
<?php else : ?>
	<h3>No se encontraron resultados.</h3>
<?php endif; ?>

<?php 
// Obtiene el contenido del archivo header.php del tema actual
get_footer(); ?>