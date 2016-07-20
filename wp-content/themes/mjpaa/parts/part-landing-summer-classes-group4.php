<?php
// groupFour args
$groupFour = array (
  'post_type' => 'class',
  'orderby'   => 'date',
  'order'     => 'ASC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '4', //change this
            'compare' => 'LIKE'
        )
    ),
  'tax_query' => array(
      'relation' => 'AND',
       array(
           'taxonomy' => 'session',
           'field'    => 'slug',
           'terms'	  => array( 'summer-classes'),
        ),
  )
  
);

$query = new WP_Query($groupFour); 
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<li><a href="<?php the_permalink() ?>" title="Click to View"><?php the_field('class_title_summer'); ?></a></li>

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?> 