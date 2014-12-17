<?php
/**
 * Header template
 *
 * @since Five Three 0.0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<nav id="access_links">
		<a tabindex="1" class="jump" href="#main_content"><?php _e( 'Go to main content', 'five-three' ); ?></a>
		<a tabindex="2" class="jump" href="#site_menu"><?php _e( 'Go to navigation', 'five-three' ); ?></a>
	</nav>
	<header id="site_header">
		<h1 id="site_title"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php bloginfo('name') ?></a></h1>
		<p id="site_tagline"><?php bloginfo('description'); ?></p>
		<nav id="site_menu">
			<?php wp_nav_menu( array(
				'primary' => 'Primary Navigation',
				) );
			?>
		</nav>
	</header>
