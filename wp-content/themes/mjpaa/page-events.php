<?php
/**
Template Name: Page - Events
 */
get_header(); ?> 

	<div class="grid">
		<div id="primary" class="col-9-12 pull-right">
			<main id="main" class="site-main entry-content" role="main">

			<div class="results-total">
				<h3>Upcoming Events</h3>
			</div>

			<div class="class-list">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/part', 'events' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->
			</main><!-- #main -->
		</div><!-- #primary -->
		
	<div id="secondary" class="classes-sidebar widget-area col-3-12 pull-left" role="complementary">
		<h3 class="page-title">Find Events</h3>
		<p class="info">To view all events, visit our calendar.</p>
		  <a href="<?= bloginfo('url'); ?>/calendar" class="button primary">View Calendar</a>
	</div><!-- .sidebar --> 

	</div><!-- grid -->
	<?php get_footer(); ?>