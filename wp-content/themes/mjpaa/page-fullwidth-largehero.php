<?php
/**
Template Name: Page - Fullwidth, Large hero
 */
get_header(); ?> 
                       
<div class="cover-top">
  <article>
      <?php if (is_page('dancers-closet') ) { //show logo on DC page, instead of page-title ?>
		 <img src="<?php bloginfo('stylesheet_directory'); ?>/img/dancerscloset-logo.png" />
	  <?php } else { ?>
	     <h4><?php the_title(); ?></h4>
  	  <?php } ?>
  	   
       <?php if( get_field('interior_callout') ): ?> 
		<p><?php the_field('interior_callout'); ?></p>
	   <?php endif ; ?>
       <!--<a href="#" class="button transparent" id="learn">Click to View</a>-->
  </article>
</div>
<div class="cover-bottom">
  <header class="entry-header">
  </header><!-- .entry-header -->
</div>

<div class="page-about default">
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

<?php get_footer(); ?>