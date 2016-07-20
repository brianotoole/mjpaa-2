<?php
/**
Template Name: Page - Classes
 */
get_header(); ?> 
          
	<div class="grid">
		<div id="primary" class="col-9-12 pull-right">
			<main id="main" class="site-main entry-content" role="main">

			<div class="results-total">
			    <h3>Classes</h3>
			</div>

			<div class="class-list">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/part', 'classes' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			</div><!--/.class-list-->
			
			</main><!-- #main -->
		</div><!-- #primary -->
		
	<div id="secondary" class="classes-sidebar widget-area col-3-12 pull-left" role="complementary">
		<h3 class="page-title">Find Classes</h3>
		<p class="info">Select an option below to filter classes.</p>
		<a class="clear-results" value="Refresh Page" onClick="window.location.reload()" href="" title="Click to Selected Class Filtering Options">Clear / reset options</a>
		  <?php echo do_shortcode('[ULWPQSF id=49 formtitle="0" button="0" text_position="bottom"]'); ?>
	</div><!-- .sidebar --> 

	</div><!-- grid -->
	<?php get_footer(); ?>
<script>
//move college label after gr 9
//var college = $("label:contains('College')"),
//    nine = $("label:contains('Grade 9')");
//   $(nine).after(college);
</script>