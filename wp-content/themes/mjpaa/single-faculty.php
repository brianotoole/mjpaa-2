<?php
/**
 * The template for displaying all single posts.
 *
 */
get_header(); ?>

	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="page-about faculty">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12 no-padding">
				<h1 class="section-title news"><?php the_title(); ?></h1> 
				<span class="position"><?php the_field('faculty_position'); ?></span>					
				<?php if ( is_singular() ) :?>
				  <div class="interior-callout"><?php the_field('interior_callout'); ?></div>
				<?php endif; ?>
				
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->

	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  <div class="entry-content">
					  		<div class="col-sm-5">
							  <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
					  		</div>
					    <?php the_content(); ?> 
					  </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">

				<h4 class="latest-title">Our Faculty</h4>
			            <?php
						// WP_Query arguments for custom post type...
						$args = array (
							'post_type'	     => array( 'faculty' ),
							'orderby' 		 => 'menu_order',
							'order'			 => 'ASC',
							'posts_per_page' => -1
						);
						// The Query
						$loop = new WP_Query( $args );
						
						// The Loop
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) {
								$loop->the_post(); ?>
									<a href="<?php the_permalink() ?>">
								    	<li class="default"><?php the_title(); ?></li>
									</a>						
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>

			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->	

	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>