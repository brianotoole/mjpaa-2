<?php
/**
Template Name: Page - Faculty profile
 */
get_header(); ?> 
            

	<div class="grid">
	
	<div id="secondary" class="classes-sidebar widget-area col-3-12" role="complementary">
		<h1 class="page-title">Our Faculty</h1>
		<p class="info">Click a staff member's name to view their biography.</p>
		  <?php echo do_shortcode('[ULWPQSF id=100 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 
	
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main entry-content" role="main">

			<div class="class-list">
			  <div class="results-total">
				<h3><?php the_title(); ?></h3>
			  </div><!--/.results-total-->
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!--/.entry-content-->

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>