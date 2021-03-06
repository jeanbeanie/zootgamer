<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WorldStar
 */

?>
	<section id="secondary" class="sidebar widget-area clearfix" role="complementary">

		<?php // Check if Sidebar has widgets.
		if ( is_active_sidebar( 'sidebar' ) ) :

			dynamic_sidebar( 'sidebar' );

			// Show hint where to add widgets.
		elseif ( current_user_can( 'edit_theme_options' ) ) : ?>

			<aside class="widget clearfix">
				<div class="widget-header"><h3 class="widget-title"><?php esc_html_e( 'Sidebar', 'worldstar' ); ?></h3></div>
				<div class="textwidget">
					<p><?php esc_html_e( 'Please go to Appearance &#8594; Widgets and add some widgets to your sidebar.', 'worldstar' ); ?></p>
				</div>
			</aside>

	<?php endif; ?>

	</section><!-- #secondary -->
