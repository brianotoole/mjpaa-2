<?php
/**
Template Name: Page - Achievements
 */
get_header(); ?> 
            

<div class="page-about sidebar-right">
<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-12 no-padding">
			<h1 class="section-title"><?php the_title(); ?></h1>
			<?php if( get_field('interior_callout') ): ?> 
			  <p><?php the_field('interior_callout'); ?></p>
			<?php endif ; ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->
</div><!--/.page-about-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title alumni">Alumni Spotlight</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->
<section class="alumni-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
				<div class="alumni" id="alumni">
					<?php
						// WP_Query arguments for alumni custom post type...
						$args = array (
							'post_type'	     => array( 'alumni' ),
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
									<div class="col-sm-2">
									    <img class="alumni" src="<?php the_field('alumni_headshot'); ?>" />
									    <h6><?php the_title(); ?></h6>
									    <p class="title"><?php the_excerpt(); ?></p>
									</div><hr class="visible-xs" />
					
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				</div>
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Calling All Alumni!</h3>
			<p>Please keep us posted of your latest accomplishments and ventures.</p> 
			<p><a href="mailto:amanda@mjpaa.com">Email us</a> with any updates and performance photos you may have.</p>
			<a class="button gold" href="mailto:amanda@mjpaa.com">Keep in Touch</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->

	<?php get_footer(); ?>