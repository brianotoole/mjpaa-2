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
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->

	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  <div class="entry-content">
					    <?php the_content(); ?> 
					    <?php if ( get_field('event_registration_link') ) :?>
			             <?php the_field('event_description_extra'); ?>
	                    <?php endif ; ?>
					  </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">
			 <?php if ( get_field('event_registration_link') ) :?>
			 <a href="<?php the_field('event_registration_link'); ?>" class="button register" target="_blank"><?php the_field('event_button_text'); ?></a>
	        <?php else :?>
			<h4 class="latest-title">News &amp; Events</h4>
			<?php get_template_part( 'parts/part', 'latest_news' ); ?>
			<?php endif ; ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->	


	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>