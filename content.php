<?php
/**
 * Default content type
 *
 * Displays average, run-of-the mill content.
 *
 * @package FiveThree
 * @license GPLv3+
 * @author Shelley V. Adams
 * @version 0.0.1
 * @since Five Three 0.0.1
 */
?>

<article id="<?php esc_attr( 'post-' . the_ID() ); ?>" <?php post_class(); ?>>
	<header>
		<h1><a rel="bookmark" href="<?php esc_url( the_permalink() ); ?>" ><?php the_title(); ?></a></h1>
		<section>
			<time class="issued" datetime="<?php esc_attr( the_time('c') ); ?>"><?php the_date('j F Y'); ?></time>
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
