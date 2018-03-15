<?php
// Obtiene el contenido del archivo header.php del tema actual
get_header('busqueda'); 
?>

Estoy usando el archivo search.php

<?php // The Loop (Wordpress) ?>
<?php if ( have_posts() ) : ?>
	<h3>Se encontraron estas coincidencias:</h3>
    <?php while ( have_posts() ) : the_post(); ?>
    	<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
    	<hr>
    <?php endwhile; ?>
<?php else : ?>
	<h3>No se encontraron resultados en tu búsqueda.</h3>
<?php endif; ?>

<?php 
// Obtiene el contenido del archivo header.php del tema actual
get_footer('busqueda'); ?>

