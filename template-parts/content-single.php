<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="row mt-5 p-md-0 p-2">
		<div style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>'); background-position:center; background-size:cover; background-blend-mode: multiply; background-color: rgba(0, 0, 0, 0.8)" class="col-md-12 mb-5 fondo-encabezado rounded p-5">
            <h2><?php echo the_field('encabezado_de_bienvenida');?></h2>
			<p class="mt-3"><?php echo the_field('');?><?php the_field('mensaje_de_bienvenida');?></p>
		</div> 
    </div>
	<div class="row p-md-0 p-2 mb-5">
		<div class="col-12 fondo-entrada border rounded p-4">
			<?php the_content();?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
