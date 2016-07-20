<?php
/**
Template Name: Page - About
 */
get_header(); ?> 
            
<?php while ( have_posts() ) : the_post(); ?>

<div class="page-about about">
<section class="history">
	<div class="intro row" id="contain">
	
	

		<div class="pad-fix">
		<div class="col-sm-4 latest-news sidebar-higher pull-right">
		  <?php get_sidebar(); ?>
		</div><!--/.col-->
		<div class="col-sm-8 no-padding">
			<h2 class="section-title">Our Mission</h2> 
			<div class="mission" id="mission">
			  <p>
				  To educate, empower and inspire students of all ages and abilities in a safe, stimulating environment. To create a safe haven where students can explore their creativity, develop self-confidence, overcome fears and explore various pathways to express their inner selves. To provide our students the vehicle to find their inner voice and learn life lessons that will help mold them into successful young adults. To share our passion for the arts and make a difference in this world one child at a time!
			  </p>
			</div><hr /><!--/.mission-->
			<div class="mission" id="vision">
			  <h2 class="section-title">Our Vision</h2> 
			  <ul>
			  	<li>To offer a place where all artistic disciplines can be explored; allowing students to discover their own creative preference and style.</li>
			  	<li>To provide the highest quality teaching staff and academy environment. </li>
			  	<li>To educate to our fullest potential utilizing the proper technical instruction in all curriculum offerings.</li>
			  	<li>To hold true to the history of the performing arts as passed down from generation to generation while incorporating the new teachings of today’s vibrant dance styles.</li>
			  	<li>To help students develop the self-confidence necessary to find their inner voice and succeed in a competitive society. </li>
			  	<li>To create a safe, nurturing environment where all students can learn at their own pace regardless of their age or abilities.</li>
			  	<li>To provide a faculty that is knowledgeable and willing to utilize various teaching techniques so that each individual can soar. </li>
			  	<li>To offer a variety of performing opportunities for students to incorporate their artistic achievements. </li>
			  	<li>To instill lifelong learning skills. </li>
			  	<li>To promote a professional and disciplined attitude in class, rehearsal and performance that will contribute to each student’s overall work ethics.</li>
			  	<li>To teach the value of all aspects of the arts, incorporating a fun experience and memories to last a lifetime. </li>
			  <ul>
			</div><!--/.vision-->
		</div><!--/.col-->
		
		
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about team">
	<div class="intro row" id="contain">
		<div class="col-sm-12" id="faculty">
		  <div class="our-history" id="history">
			  <h2 class="section-title">Our History</h2> 
				<p class="pad-fix">For over 35 years, Mary Jo's Performing Arts Academy (MJPAA) has been a leader in the Tampa bay area specializing in Dance, Acting, Voice and Music education. Our distinctive combination of performing arts curricula and professional compassionate faculty provides students an edifying experience while developing friendships and a lifelong appreciation of the arts. Under the tutelage of Artistic Director Mary Jo Scanio, the Academy has grown to incorporate education in all areas of the performing arts and has emerged today as one of the finest training facilities in the southeast region. MJPAA was named one of the top 50 dance schools in the United States in 2004 by Dance Spirit Magazine. Since then, it has continued to remain on the honor roll of Outstanding Dance Schools from 2005 to the present. </p><br />
				<p class="pad-fix">The Academy is the home of <a href="http://tbttt.org" target="_blank">The Tampa Bay Triple Threat Theatre</a>, <a href="<?php bloginfo('url'); ?>/universal-movement">The Universal Movement Performing Arts Company</a> and the Classical Ballet of Tampa. There are a variety of disciplines and levels provided for all ages from recreational to those wanting to pursue the arts as a career. Opportunities for our students to showcase their talents throughout the year is abundant and ranges from Ballet and Musical Theater Productions to community outreach presentations and events. </p><br />
				<p class="pad-fix">MJPAA is founded on the belief that arts education is character education, instilling the discipline, self confidence, creativity and life lessons necessary for students to succeed in any path they choose. The Academy has been home to over 1000's of aspiring artists, many who are currently enjoying careers in the performing arts as entertainers, choreographers and educators. However, you will also find many more of our former students who through the discipline of arts education are soaring in science, technology liberal arts, and most importantly, Life! </p><br />
			</div><hr /><!--/.our-history-->
			
				<h3 class="section-title">Our Faculty &amp; Staff</h3> 
				
					  <div class="admin">
						<h5>Business Administration Department:</h5>
						 <div class="col-sm-4">
						   <h6>- Bev Menard, Accountant</h6>
						   <p class="title"><a href="tel:813-969-0240 ext. 226"> 813-969-0240 ext. 226</a></p>
						   <h6>- Tammi Godinez, Director of Admissions</h6>
						   <p class="title"><a href="813-969-0240 ext. 231"> 813-969-0240 ext. 231</a></p>
						   <h6>- Kristin Scanio, Assistant to the Director</h6>
						   <p class="title"><a href="813-969-0240 ext. 223"> 813-969-0240 ext. 223</a></p>
						   <h6>- Melinda Yates, Director of Customer Relations</h6>
						   <p class="title"><a href="813-969-0240 ext. 232"> 813-969-0240 ext. 232</a></p>
						   <h6>- Lindsey Brangaccio, Client Specialist</h6>
						   <h6>- Pam Matthews, Client Specialist</h6>
						   <h6>- Sean McDonald, Client Specialist</h6>
						 </div><!--/.col-->
						 <div class="hidden-xs col-sm-6 col-sm-offset-2 faculty" style="margin-top:-30px;">
						   <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about_img.jpg" />
						 </div>
						 <div class="visible-xs col-sm-6 col-sm-offset-2 faculty" style="margin-top:30px;">
						   <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about_img.jpg" />
						 </div><!--/.col-->
					  </div><!--/.admin-->
				
			
				<div class="program-titles">
				  <h5>Faculty:</h5>
					<?php
						// WP_Query arguments for faculty custom post type...
						$args = array (
							'post_type'	     => array( 'faculty' ),
							'orderby' 		 => 'menu_order',
							'order'			 => 'ASC',
							'posts_per_page' => -1
						);
						// The Query
						$loop = new WP_Query( $args );
						
						// The Loop
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) {
								$loop->the_post(); ?>
									<div class="col-xs-12 col-sm-2 outer">
									  <a href="<?php the_permalink() ?>">
									    <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
									    <div class="meta">
									      <h6><?php the_title(); ?></h6>
									      <p class="title"><?php the_field('faculty_position'); ?></p>
									      <p class="hidden-xs view">Read Full Bio</p>
									      <a class="visible-xs button mobile" href="<?php the_permalink() ?>">Read Full Bio</a>
									    </div>
									  </a>
									</div><hr class="visible-xs" />
										
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				</div><!--/.program-titles-->
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->



<section class="facility" id="facility">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Our Facility</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="facility-two">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
		
		  <div class="col-sm-3">
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maryjosfacility1.jpg" />
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maryjosfacility3.jpg" />
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maryjosfacility2.jpg" />
		  </div><!--/.col-->
		  <div class="col-sm-9">
		   <p>Our 12,000 plus square foot World Class Performing Arts Academy is not only the ideal facility for instruction in the arts, but can serve as host to a variety of functions and special events including: birthday parties; business meetings; corporate seminars; and even church services. As a performing arts instructional facility, we are always ready to provide rehearsal space to outside organizations such as school dance teams or choral groups, as well as individuals and small groups of performers.</p><br />

		   <p>We have adequate furnishings on hand to provide for small to medium sized gatherings, and can make any arrangements necessary to provide for larger functions. We have a concession area and a partial kitchen with microwave oven, sink, refrigerator and freezer which can be utilized to provide food and drink services, or our party planners can help make arrangements with catering services.</p><br />

		   <p>The black box theatre can seat up to 200 spectators and is an ideal performance venue for small dance performances, theatrical productions and talent showcases. 40 par-can stage lights are pre-installed and ready to be used, and additional lighting and audio equipment can be put in place for more elaborate shows.</p>
		   <hr />
		   <div class="col-sm-6">
		   <h3>Our facility includes:</h3>
		     <ul>
			   <li>7-spacious dance studios with sprung floors for injury prevention.</li>
			   <li>Acoustical music rooms with pianos.</li>
			   <li>Fully equipped tumbling area with aerial spotting apparatus.</li>
			   <li>Black Box Theatre to hold small performances.</li>
			   <li>Healthy Snack Bar with food and drinks.</li>
			   <li>Dancer's Closet Boutique with clothing, shoes and accessories.</li>
			   <li>Student lockers available.</li>
		       <li>Video monitors for a distraction free learning environment.</li>
			</ul>
		   </div>
		   <div class="col-sm-1 video-tour">
		   <video class="hidden-xs" width="380" height="325" style="width:380px;height:325px;" controls>
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/mjpaatour.mp4" type="video/mp4">
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/mjpaatour.ogg" type="video/ogg">
		  </video>
		  <video class="visible-xs" width="100%" height="425" style="width:380px;height:325px;" controls>
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/mjpaatour.mp4" type="video/mp4">
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video/mjpaatour.ogg" type="video/ogg">
		  </video>
		</div>
	  	  </div><!--/.col-->
		</div><!--/.col-->
		<div class="clearfix"></div><hr />

		<div class="col-sm-12 text-center" id="rental">
			<h3>Interested in Renting for Your Private Event?</h3>
			<p>Whatever you need, we have the flexibility to accommodate you!</p>
			<a class="underline" href="<?php bloginfo('url'); ?>/contact">Contact us for rental information</a>
		  </p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.facility-two-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Why Choose Us?</h3>
			<a class="button gold" href="<?php bloginfo('url'); ?>/about/why-mjpaa">Discover the Difference</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->



</div><!--/.page-about-->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>

<script>
$(function() {
    var $sidebar   = $("#secondary"),
    	$sidebarHeight	= 825,
        $window    = $(window),
        offset     = $sidebar.offset(),
        topMargin = 25;

$window.scroll(function() {

    if ($window.scrollTop() > offset.top && $window.scrollTop() <= $sidebarHeight && $(window).width() >= 899) { //not on mobile
        $sidebar.stop().animate({
            marginTop: $window.scrollTop() - offset.top + topMargin
        }, 400);
        
    } else {
        $sidebar.stop().animate({
            marginTop: 0
        }, 400);
    }
    
});

});
</script>