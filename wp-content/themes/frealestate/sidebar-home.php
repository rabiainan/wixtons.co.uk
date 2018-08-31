<?php
/**
 * The sidebar containing the main home columns widget areas
 *
 * @subpackage frealestate
 * @author tishonator
 * @since frealestate 1.6.1
 *
 */
?>

<div id="home-cols">

	<div id="home-cols-inner">

		<?php if ( !dynamic_sidebar( 'homepage-widget-area' ) ) : ?>

					<h2 class="sidebar-title">
						<?php esc_html_e('Homepage Widget', 'frealestate'); ?>
					</h2><!-- .sidebar-title -->
					
					<div class="sidebar-after-title">
					</div><!-- .sidebar-after-title -->
					
					<div class="textwidget">
						<?php esc_html_e('This is the homepage widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Homepage Widget.', 'frealestate'); ?>
					</div><!-- .textwidget -->
		
		<?php endif; // end of ! dynamic_sidebar( 'homepage-widget-area' )
			  ?>
		
		<div class="clear">
		</div><!-- .clear -->

	</div><!-- #home-cols-inner -->

</div><!-- #home-cols -->