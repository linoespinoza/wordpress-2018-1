<?php
// Obtiene el contenido del archivo header.php del tema actual
get_header(); 
?>

Estoy usando el archivo singular.php

<?php // The Loop (Wordpress) ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<h1><?php echo the_title(); ?></h1>

    	<?php echo the_content(); ?>
    	<hr>
    	Etiquetas:

    	<?php
			$posttags = get_the_tags();
			//var_dump($posttags);
			if ($posttags) {
			  foreach($posttags as $tag) {
			    echo $tag->name . ', '; 
			  }
			}
		?>

    <?php endwhile; ?>
<?php else : ?>
	<h3>No se encontraron resultados.</h3>
<?php endif; ?>

<hr>

<?php 
/*
@todo : Validar que cuando se envíe el formulario aparezca un mensaje de éxito 
*/
?>
<?php comment_form(); ?>

<?php 
// Obtiene el contenido del archivo header.php del tema actual
get_footer(); ?>