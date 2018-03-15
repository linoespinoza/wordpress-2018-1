<?php
// Obtiene el contenido del archivo header.php del tema actual
get_header(); 
?>
Estoy usando el archivo home.php
<h1>Estoy listando las ultimas entradas</h1>

<?php // The Loop (Wordpress) ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<h2><?php echo the_title(); ?></h2>

    	<?php echo the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php 
// Obtiene el contenido del archivo header.php del tema actual
get_footer(); ?>