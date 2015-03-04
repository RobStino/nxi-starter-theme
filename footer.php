<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NXI
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-area-1' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-area-2' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-area-3' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
						<?php dynamic_sidebar( 'footer-area-4' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="site-info">
				<span>Proudly built by <a href="<?php echo esc_url( __( 'http://number11.co/', 'nxi' ) ); ?>"><?php printf( __( 'Number 11', 'nxi' ) ); ?></a></span>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
