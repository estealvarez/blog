<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php the_custom_logo(); ?>
		</div> -->

		<nav id="site-navigation">
		<?php if(is_active_sidebar('menu_de_navegacion')) :
					dynamic_sidebar('menu_de_navegacion'); endif;?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	