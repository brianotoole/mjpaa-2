<?php
/**
Template Name: Page - Need Help Class Search
 * 
 */
get_header(); ?> 
        
	<div class="grid">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
					<div class="results-total">
					    <h3>Search for Classes by Title</h3>
					    <p>Enter the class title in the search form below. Then click "Search" to find classes based on your title. The class results will appear below.</p>
					    <div style="margin-top:80px;"><?php echo do_shortcode('[ULWPQSF id=175 formtitle="0" button="1" text_position="bottom"]'); ?></div>
					</div>
					<div class="class-list">
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
