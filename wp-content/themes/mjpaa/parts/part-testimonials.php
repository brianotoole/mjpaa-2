<?php
//testimonials, display 1 random from "testimonial" post_type
$args = array( 
  'post_type' => 'testimonial', 
  'posts_per_page' => 1,
  'order' => 'DESC',  
  'orderby' => 'rand'
);

// The Query
$loop = new WP_Query( $args );
// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
		
        <p>"<?php the_field('testimonial_quote'); ?>" <br /><span><strong>- Testimonial from:</strong> <?php the_field('testimonial_client'); ?></span></p>

<?php } 
} else {
	// no testimonials found
}

// Restore original Post Data
wp_reset_postdata();

?>
