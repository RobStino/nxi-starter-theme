<?php
/**
 * The Page template file.
 *
 * @package NXI
 */

get_header(); ?>

<?php /* Featured Posts Section 1 */ ?>
<section>
	<div class="container">
		<div class="row">
			<?php
			// Get our Featured Content posts
			$featured_blocks = nxi_get_featured_posts();
			 
			// If we have no posts, our work is done here
			if ( empty( $featured_blocks ) )
			    return;
			 
			// Let's loop through our posts ?>
			<div class="slider">
			    <?php foreach ( $featured_blocks as $post ) : setup_postdata( $post ); ?>
			        <div class="slide col-sm-4">
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
		</div>
	</div>
</section>

<?php /* Featured Posts Slider */ ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php get_template_part( 'templates/slider' ); ?>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col-sm-12">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


</div>
</div>


<?php get_footer(); ?>
