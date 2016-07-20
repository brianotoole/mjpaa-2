<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

	<div class="grid">
	
			  <div class="results-total">
				<h3>404 - Content Not Found</h3>
			  </div><!--/.results-total-->
			  
			  <div class="class-list">
			  <?php if ( have_posts() ) : ?>
			  <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>