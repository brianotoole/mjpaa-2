<?php
/**
Template Name: Page - UM, Fullwidth, Large video
 */
get_header(); ?> 
            
<div class="video-overlay">
  <!--<article>
  		<h4>Universal Movement Performing Arts Company</h4>
  </article>-->
</div>
<video class="sqs-html5-video" poster="<?php bloginfo('stylesheet_directory'); ?>/assets/img/testimonialshero.jpg" id="heroVideo" autoplay muted loop>
  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/um.webm" type="video/webm">
  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/um.mp4" type="video/mp4">
  <!--[if lt IE 9]>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/testimonialshero.jpg" class="ie8-poster">
  <![endif]-->
</video>

<div id="umVideo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">UM Dance Reel</h6>
          <a class="pull-right modal-close" data-dismiss="modal">&times;</a>
      </div>
      <!-- dialog body -->
      <div class="modal-body">
		<iframe width="100%" height="415" src="https://www.youtube.com/embed/bm87HS4K7jM?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- dialog buttons -->
    </div>
  </div>
</div>

	<!--<div class="page-about default">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12 no-padding">
				<a class="button primary" id="modal-btn" data-toggle="modal" href="#full-width">Watch our UM Teams in Action</a>
			</div>
		</div>
	</section>-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div><!--/.col-->
			
			<div class="col-sm-4 latest-news">
				<?php get_sidebar(); ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->
	</div><!--/.page-about-->

	<?php get_footer(); ?>