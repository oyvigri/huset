<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Huset
 */

?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer" role="contentinfo"> <!-- Styler site-footer pga bug -->
		<?php get_sidebar('footer'); ?> <!-- Henter inn fra sidebar-footer -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'huset' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'huset' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'huset' ), 'huset', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
