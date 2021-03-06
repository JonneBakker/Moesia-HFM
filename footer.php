<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

	</div><!-- #content -->
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>
	
	<!-- JB: colophon uit 
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'moesia' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'moesia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %2$s by %1$s', 'moesia' ), 'aThemes', '<a href="http://athemes.com/theme/moesia">Moesia</a>' ); ?>
		</div>
	</footer>
	end: colofon uit -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
