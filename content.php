<?php
/**
 * Default content type
 *
 * Displays average, run-of-the mill content.
 *
 * @since Five Three 0.0.1
 */
?>

<article>
	<header>
		<h1><a rel="bookmark" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
		<section>
			<time class="issued" datetime="<?php the_time('c'); ?>"><?php the_date('j F Y'); ?></time>
			<span class="attribution"><?php _e( 'by', 'five-three' ); ?> <?php the_author_posts_link(); ?></span>
		</section>
	</header>
	<?php the_content( __( 'Read more', 'five-three' ) . '…' ); ?>
	<footer>
		<?php if ( !is_page() ) : ?>
			<p class="category"><?php _e( 'Posted in', 'five-three' ) ?> <?php the_category(', ') ?>.</p>
			<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
		<?php endif; ?>
	</footer>
</article>
