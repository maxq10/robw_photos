<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rob_Wanenchak_Photography
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="header">
<div class="container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'robw_photos' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
            
		<div class="site-branding">
                    <article class="robw-title">
			<?php
                        //Commenting out default site title
			/*if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="//<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="//<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;*/
                        
                        //Custom site title
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="title"><a href="//<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">rob<span>wanenchak</span>photography</a></h1>
			<?php else : ?>
				<p class="title"><a href="//<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">rob<span>wanenchak</span>photography</a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
                    </article>
		</div><!-- .site-branding -->

                <article class="robw-nav">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'robw_photos' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                </article>
	</header><!-- #masthead -->
</div><!-- .container -->
</section>

	<div id="content" class="site-content">
