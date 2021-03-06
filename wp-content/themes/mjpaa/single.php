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
								
				<?php if ( is_singular('post') ) :?>
				  <div class="interior-callout"><?php the_field('interior_callout'); ?></div>
				<?php endif; ?>
				
				<?php if ( is_singular('post') && ! in_category( array( '1', '188' ) )  ) : //all but news & blog ?>
				    <p class="pad-fix"><strong>Event Date:</strong> <?php the_field('event_start_date'); ?>
				    <?php if( get_field('event_end_date') ): //if end date is entered... ?>
				    - <?php the_field('event_end_date'); ?>
				    <?php endif; ?></p>
				  <?php if( get_field('event_location_link') != get_field('event_location_link') ): ?>
				    <p class="pad-fix"><strong>Event Location: <strong> <?php the_field('event_location_name'); ?></p>
				  <?php endif ; ?>		
				  <?php if( get_field('event_location_link') && get_field('event_location_link') ): ?>
				  	<p class="pad-fix"><strong>Event Location: </strong> <a href="<?php the_field('event_location_link'); ?>"><?php the_field('event_location_name'); ?></a></p>
				  <?php endif ; ?>			    
				    
				  <?php endif ; ?>
				
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->

	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  <div class="entry-content">
					  	<?php if ( is_singular( 'faculty' ) ) :  ?>
					  		<div class="col-sm-5">
							  <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
					  		</div>
						<?php endif ; //close if is single post_type 'facutly' ?>
					    <?php the_content(); ?> 
					    <?php if ( is_singular() && get_field('class_code_indivlink') ) :?>
						  <br /><?php the_field('class_code_indivlink'); ?>
						<?php endif; ?>
					  </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">
				<?php if ( is_singular( 'post' ) && in_category( 'news' ) || in_category ( 'blog' ) ) :?>
					<h4 class="latest-title">News &amp; Events</h4>
					<?php get_template_part( 'parts/part', 'latest_news' ); ?>
				<?php endif ; ?>
				<?php get_sidebar(); ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->	

	

	<?php if ( is_singular( 'class' ) && get_field('class_registration_link') || is_singular() && get_field('event_registration_link') ): //registration link ?>
	<div class="footer-contact overlay">
		<div class="grid grid-pad row">
			<div class="col-sm-12">
				<h3>Sign up for: <strong><?php the_title(); ?></strong></h3>
				<p>To register, click the button below.</p>
				<?php if ( is_singular( 'class' ) && get_field('class_registration_link') ) {  ?>	
				  <a class="button gold" href="<?php the_field('class_registration_link'); ?>" target="_blank">Register Now</a>
				<?php } else if (get_field('event_registration_link') ) {   ?>	
				  <a class="button gold" href="<?php the_field('event_registration_link'); ?>" target="_blank">Register Now</a>
				<?php } else {  ?>
				<?php } ?>
			</div>
		</div><!-- grid -->
	</div><!-- footer-contact -->
	

	
	<?php endif ; ?>

	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>