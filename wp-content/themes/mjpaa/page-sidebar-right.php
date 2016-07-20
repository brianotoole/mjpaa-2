<?php
/**
Template Name: Page - Sidebar Right
 */
get_header(); ?> 
            

<div class="page-about sidebar-right">
<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-12 no-padding">
			  <h1 class="section-title"><?php the_title(); ?></h1>
			<?php if( get_field('interior_callout') ): ?> 
			  <div class="interior-callout"><?php the_field('interior_callout'); ?></div>
			<?php endif ; ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

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