<?php
/**
 * The Page template file.
 *
 * @package NXI
 */

get_header(); ?>

<?php /* Featured Posts Section 1  - Content Blocks */ ?>
<section>
	<div class="container-fluid content-area">
		<div class="row">
			<?php
			// Get our Featured Content posts
			$featured_blocks = nxi_get_featured_posts();

			// If we have no posts, our work is done here
			if ( empty( $featured_blocks ) )
				return;

			// Let's loop through our posts ?>
			<div class="content-blocks">
				<?php foreach ( $featured_blocks as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'content', 'blocks' ); ?>
				<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php /* Featured Posts Slider */ ?>
<section>
	<div class="container-fluid content-area">
		<div class="row full-width-slider">
			<?php get_template_part( 'templates/slider' ); ?>
		</div>
	</div>
</section>

<section>
	<div class="container content-area">
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
</section>


</div>
</div>


<?php get_footer(); ?>
