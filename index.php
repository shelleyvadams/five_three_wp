<?php
/**
 * Default template
 *
 * When nothing else fits, use this.
 *
 * @since Five Three 0.0.1
 */
?>

<?php get_header(); ?>

<main id="main_content">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); // saving this for later , get_post_format() ); ?>
		<?php endwhile; ?>
	<?php else : // there are no posts ?>
		<article>
			<header>
				<h1><?php _e( 'Nothing to see here', 'five-three' );?></h1>
			</header>
			<p><?php _e( 'Apparently, there are no posts. Seems odd, doesn\'t it?', 'five-three' );?></p>
		</article>
	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>