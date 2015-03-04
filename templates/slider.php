<?php
// Get our Featured Content posts
$slider = nxi_get_featured_posts();
 
// If we have no posts, our work is done here
if ( empty( $slider ) )
    return;
 
// Let's loop through our posts ?>
<div class="slider">
    <?php foreach ( $slider as $post ) : setup_postdata( $post ); ?>
        <div class="slide">
        	<?php if ( has_post_thumbnail() ) : ?> 

				<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('large', array( 'class'	=> "img-responsive, blog-thumbnail")); ?></a> 

			<?php endif ; ?>
            <header class="entry-header">
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php nxi_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
        </div><!-- .slide -->
    <?php endforeach; ?>
</div><!-- .slider -->
<?php wp_reset_postdata(); ?>