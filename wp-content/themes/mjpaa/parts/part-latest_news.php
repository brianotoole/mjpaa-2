<?php
/**
 Get posts IN ONLY 'News' & 'Events' category slug
 Only show 4 posts
 If more than 4 posts are PUBLISHED, display "view more button"
*/

$args = array (
  'post_type' => 'post',
  'order'		   => 'DESC',
  'posts_per_page' => 3
  //'post_status' => 'publish'
);


$query = new WP_Query($args); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
 
<div class="col-sm-12 descrip">
  <h5 class="news-title"><?php the_title(); ?></h5>
    <p class="date"></p>  
	  <a class="hidden-xs view" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read <?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?> Article</span></a>
	  <a class="visible-xs button mobile" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="cat-title">Read <?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?> Article</span></a>
</div>
<div class="clear"></div>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no recent updates at this time.' ); ?></p>
<?php endif; ?>
 
<?php

  get_template_part( 'parts/part', 'latest_events' );
  
/*
 $count_posts = wp_count_posts(); 
  $published_posts = $count_posts->publish;
    if( $published_posts >= 3 ) { //if there are 4 or more published posts, show view more link
        echo '<div class="col-sm-12 text-center no-padding">';
        echo '<a href="' . get_option('home') . '/events" class="hidden-xs view more">' . 'View More News' . '</a>';
        echo '<a href="' . get_option('home') . '/events" class="visible-xs button mobile">' . 'View More News' . '</a>';
        echo '</div>'; 
    }
*/
?>