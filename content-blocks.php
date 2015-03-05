<?php
/**
 * @package NXI
 */
?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), large ); ?>
<div class="slide col-sm-3 content-block" style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center center;">
	<div class="bg-overlay-darken">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php nxi_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
</div><!-- .slide -->