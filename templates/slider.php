

<?php
// Get our Featured Content posts
$slider = nxi_get_featured_posts();

// If we have no posts, our work is done here
if ( empty( $slider ) )
	return;

// Let's loop through our posts ?>
<div class="flexslider">
	<ul class="slides">

		<?php 
			foreach ( $slider as $post ) : setup_postdata( $post ); 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_thumb_url( $thumb_id );
		?>
		<li data-thumb="<?php echo $thumb_url ?>" class="full-width-slider">

		<?php if ( has_post_thumbnail() ) : ?> 

			<?php the_post_thumbnail('large', array( 'class'	=> "img-responsive, blog-thumbnail")); ?> 

		<?php endif ; ?>

		<header class="entry-header">

			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<?php nxi_posted_on(); ?>

			</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->
		</li>

		<?php endforeach; ?>

	</ul>
</div>

<?php wp_reset_postdata(); ?>