<div class="entry-content">
<?php
$args = array( 
  'category__not_in' => '197',
  'posts_per_page' => 3,
  'post_status' => 'publish'
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-sm-12 descrip">
  <h5 class="news-title"><?php the_title(); ?></h5>
    <!--<p class="date"></p>-->  
	  <a class="hidden-xs view" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read More</span></a>
	  <a class="visible-xs button mobile" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read More</span></a>
</div>
<div class="clear"></div>

<?php
endwhile;
wp_reset_query();
?>


<?php
$args = array( 
  'category__in' => '197',
  'posts_per_page' => 4,
  'post_status' => 'publish'
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-sm-12 descrip">
  <h5 class="news-title"><?php the_title(); ?></h5>
    <!--<p class="date"></p>-->  
	  <a class="hidden-xs view" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read More</span></a>
	  <a class="visible-xs button mobile" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read More</span></a>
</div>
<div class="clear"></div>

<?php
endwhile;
?>