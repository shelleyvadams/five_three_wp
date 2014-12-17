<?php
/**
 * Sidebar template
 *
 * Provides the primary widget area.
 * Displays a search form if no widgets are present.
 *
 * @since Five Three 0.0.1
 */
?>
	<aside id="site_sidebar">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</aside>
