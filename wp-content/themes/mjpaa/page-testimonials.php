<?php
/**
Template Name: Page - Testimonials
 */
get_header(); ?> 
                       
<div class="cover-top">
  <article>
  	   <h4><?php the_title(); ?></h4>
       <?php if( get_field('interior_callout') ): ?> 
		<p><?php the_field('interior_callout'); ?></p>
		<?php endif ; ?>
       <a href="#" class="button transparent" id="learn">Click to Read Testimonials</a>
  </article>
</div>
<div class="cover-bottom">
<header class="entry-header" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/testimonialshero.jpg') center center no-repeat; background-size:cover;"></header>
</div>


<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content testimonial">
					<?php
					//testimonials, display all "testimonial" post_type
					$args = array( 
					  'post_type' => 'testimonial', 
					  'posts_per_page' => -1,
					  'orderby' => 'rand'
					);
					
					// The Query
					$loop = new WP_Query( $args );
					// The Loop
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) {
							$loop->the_post(); ?>
							
					        <p><i class="fa fa-quote-left"></i> <?php the_field('testimonial_quote'); ?> <br /><span><strong>- Testimonial from:</strong> <?php the_field('testimonial_client'); ?></span></p><hr />
					        
					
					<?php } 
					} else {
						// no testimonials found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					
					?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->
</div><!--/.page-about-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title alumni">Awards &amp; Recognitions</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->
<section class="alumni-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h6><i class="fa fa-trophy"></i> Currently one of the Federation of Dance Competition's Top 25 schools in the Southeast Region</h6><hr />
			
			<h6><i class="fa fa-trophy"></i> FDC People's Choice Award Winner, power ranked with the World Dance Championship Series</h6><hr />
			<h6><i class="fa fa-trophy"></i> Victory Cup Winner and FDC Studio of Excellence</h6><hr />
			<h6><i class="fa fa-trophy"></i> Voted one of the Top 50 Dance Schools in the country by Dance Spirit Magazine</h6><hr />
			<h6><i class="fa fa-trophy"></i> GOLD Winner of Best of North Tampa</h6>
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Want to provide your feedback?</h3>
			<p>If you have a comment to provide to us, please email us using the button below.</p> 
			<a class="button gold" href="<?php bloginfo('url'); ?>/contact">Send Feedback</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->

	<?php get_footer(); ?>