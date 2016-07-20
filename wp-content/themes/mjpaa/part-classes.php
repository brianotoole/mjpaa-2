<?php
// WP_Query arguments for linking from homepage to taxonomy archives for all classes: Dance & Classical Ballet
if (is_page ('236') ) {
// get all terms in the taxonomy
$terms = get_terms( 'program-dance-upper', 'program-dance-childrens' ); 
// convert array of term objects to array of term IDs
$term_ids = wp_list_pluck( $terms, 'term_id' );

	$args = array (
		'post_type'	     => array( 'class' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1,
		'tax_query'     => array(
	                    array(
	                        'taxonomy'  => 'program-dance-upper', 'program-dance-childrens',
							'field' => 'term_id',
							'terms' => $term_ids,
	                    )
	                )
	);	
	
	
// WP_Query arguments for linking from homepage to taxonomy archives for all classes: Acting & Theater
} else if (is_page ('238') ) {
// get all terms in the taxonomy
$terms = get_terms( 'program-acting' ); 
// convert array of term objects to array of term IDs
$term_ids = wp_list_pluck( $terms, 'term_id' );

	$args = array (
		'post_type'	     => array( 'class' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1,
		'tax_query'     => array(
	                    array(
	                        'taxonomy'  => 'program-acting',
							'field' => 'term_id',
							'terms' => $term_ids,
	                    )
	                )
	);	


// WP_Query arguments for linking from homepage to taxonomy archives for all classes: Music, Instruments, Voice
} else if (is_page ('240') ) {
// get all terms in the taxonomy
$terms = get_terms( 'program-music' ); 
// convert array of term objects to array of term IDs
$term_ids = wp_list_pluck( $terms, 'term_id' );

	$args = array (
		'post_type'	     => array( 'class' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1,
		'tax_query'     => array(
	                    array(
	                        'taxonomy'  => 'program-music',
							'field' => 'term_id',
							'terms' => $term_ids,
	                    )
	                )
	);	
	
	
	
// WP_Query arguments for linking from homepage to taxonomy archives for all classes: Acrobatics
} else if (is_page ('242') ) {
// get all terms in the taxonomy
$terms = get_terms( 'program-acrobatics' ); 
// convert array of term objects to array of term IDs
$term_ids = wp_list_pluck( $terms, 'term_id' );

	$args = array (
		'post_type'	     => array( 'class' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1,
		'tax_query'     => array(
	                    array(
	                        'taxonomy'  => 'program-acrobatics',
							'field' => 'term_id',
							'terms' => $term_ids,
	                    )
	                )
	);	
	
	

} else {
	
// WP_Query arguments for custom post type...
	$args = array (
		'post_type'	     => array( 'class' ),
		'order'			 => 'DESC',
		'posts_per_page' => -1
	);
}
// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
			<a href="<?php the_permalink() ?>">
				<div class="col-sm-4">
				  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
				  <img class="thumbnail" src="<?php echo $image; ?>">
				  <?php else: //if no featured image is uploaded, show default icon img ?>
				  <div class="thumbnail default"><i class="fa fa-music"></i></div>
				  <?php endif; ?>
				</div><!--/.col-->
				<div class="col-sm-8 descrip">
				  <h3 class="class-title"><?php the_title(); ?></h3>
				  <p><?php mjpaa_excerpt('mjpaa_excerpt_length','mjpaa_view_more_class'); ?></p>
				</div><!--/.col-->
			</a>
				<div class="clear"></div><hr />

<?php } 
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>