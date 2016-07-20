<?php
/**
Template Name: Page - News & Events
 */
get_header(); ?> 

	<div class="grid">
		<div id="primary" class="col-9-12 pull-right">
			<main id="main" class="site-main entry-content" role="main">

			<div class="results-total">
				<h3>Search for Events</h3>
			</div>

			<div class="class-list">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/part', 'news' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->
			</main><!-- #main -->
		</div><!-- #primary -->
		
	<div id="secondary" class="classes-sidebar widget-area col-3-12 pull-left" role="complementary">
		<h3 class="page-title">Find News</h3>
		<p class="info">Select an option below to filter events.</p>
		  <?php echo do_shortcode('[ULWPQSF id=88 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 

	</div><!-- grid -->
	<?php get_footer(); ?>