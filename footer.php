<?php
/**
 * Footer template
 *
 * Provides a site footer containing a secondary widget area.
 * If no widgets are present, the footer will contain a 'Powered by' statement
 * with links to WordPress and the URL for the current theme.
 * Finally, calls wp_footer and ends the document.
 *
 * @package FiveThree
 * @license GPLv3+
 * @author Shelley V. Adams
 * @version 0.0.1
 * @since Five Three 0.0.1
*/
?>

	<footer id="site_footer">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer')) : else : ?>
			<?php $theme = wp_get_theme(); ?>
			<p><?php _e ( 'Powered by', 'five-three' ); ?>
				<a href="http://wordpress.org/">WordPress</a>
				<?php _e ( 'and', 'five-three' ); ?>
				<a href="<?php esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php echo $theme->get( 'Name' ); ?></a>.</p>
		<?php endif; ?>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
