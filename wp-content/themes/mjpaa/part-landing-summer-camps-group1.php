<?php
// GroupOne args
$groupOne = array (
  'post_type' => 'class',
  'orderby'   => 'title',
  'order'     => 'DESC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '1', //change this
            'compare' => 'LIKE'
        )
    ),
  'tax_query' => array(
      'relation' => 'AND',
       array(
           'taxonomy' => 'session',
           'field'    => 'slug',
           'terms'	  => array( 'summer-camps'),
        ),
  )
  
);

$query = new WP_Query($groupOne); 
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<li><a href="<?php the_permalink() ?>" title="Click to View"><?php the_field('class_title_summer'); ?></a></li>

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?> 