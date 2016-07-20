<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('fadeshow_img1'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img2'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img3'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img4'); ?>') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12">                   
            <h4 class="hidden-xs">"When the arts enter a child's world, magic happens."</h4>
            <p class="hidden-xs">- Mary Jo Scanio, Owner &amp; Artistic Director</p>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<h4 class="hidden-xs section-title">The Academy Offers a Complete Performing Arts Curriculum</h4>
			<h6 class="hidden-xs">Our programs include - </h6>
			
			<!--mobile only-->
			<div class="mobile-pad">
			  <h4 class="visible-xs latest-title text-center">How can we help you?</h4> 
			  <div class="service visbile-xs hidden-sm hidden-md hidden-lg">
			    <a class="button mobile" href="<?php bloginfo('url'); ?>/about/#">What is MJPAA?</a>
			    <a class="button mobile" href="<?php bloginfo('url'); ?>/summer">Summer 2016 Registration</a>
			    <a class="button mobile" href="<?php bloginfo('url'); ?>/general-info">I need general information</a>
			    <a class="button mobile" href="<?php bloginfo('url'); ?>/classes">I need class information</a>
			    <a class="button mobile" href="<?php bloginfo('url'); ?>/contact">I need contact information</a>
			    <a class="button mobile" href="https://www.google.com/maps/dir//15906+Mapledale+Blvd,+Tampa,+FL+33624/@28.098403,-82.505447,14z/data=!4m13!1m4!3m3!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2s15906+Mapledale+Blvd,+Tampa,+FL+33624!3b1!4m7!1m0!1m5!1m1!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2m2!1d-82.504962!2d28.098768?hl=en" target="_blank">I need directions</a>
			    <a class="button mobile" href="#browse">I'm not sure. Let me browse.</a>
			  </div>
			
			<div class="visible-xs mobile-margin"></div>
			<h4 class="visible-xs latest-title">MJPAA offers a complete Performing Arts Curriculum. <br />Our programs include - </h4>
			</div><!--/.mobile-pad-->
			
			<div class="program-titles" id="browse">
				
			<div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/dance-classical-ballet-of-tampa">
				        <div class="spinner"></div>
						   <div class="img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/circle1.jpg" alt="Dance and Classical Ballet of Tampa, MJPAA"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Dance &amp; Classical Ballet of Tampa</h5>
					<p>Classes are offered in a wide variety of styles and disciplines. The dance program consists of children's division, recreational dance, upper division, intensive training program and adult classes. The Classical Ballet of Tampa is our upper division ballet training program. Students of the Classical Ballet of Tampa have been recognized with awards and scholarships at numerous competitions, workshops, and universities throughout the United States. </p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/acting-theater">
				        <div class="spinner"></div>
						  <div class="img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/circle2.jpg" alt="Acting and Theater Tampa, MJPAA"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acting &amp; Theater</h5>
					<p>Classes are offered in Acting, Drama, Musical Theater, Improvisation, and On-Camera Technique. Adult classes are available. This program is devoted to training students for theatrical and/or commercial productions. Theatrical productions are available by audition throughout the year.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/music-instruments-voice">
				        <div class="spinner"></div>
						  <div class="img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/circle3.jpg" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Music, Instruments &amp; Voice</h5>
					<p>Classes and private lessons are offered in voice and music for ages 5-adult. Private instrumental instruction are available in Piano, Guitar and Saxophone. Private and semi-private lessons are available in voice.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/acrobatics">
				        <div class="spinner"></div>
						  <div class="img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/circle4.jpg" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				            <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acrobatics</h5>
					<p>Acrobatic Classes are offered for students at the beginner, intermediate, and advanced level. Classes are individualized to allow each student to progress at their own pace.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  
			</div><!--/.program-titles-->
			  
			  
		</div>
		<div class="col-sm-4 latest-news">
			<h4 class="latest-title">News &amp; Events</h4>
			<?php get_template_part( 'parts/part', 'latest_news' ); ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->

<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-3 visit">
			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Recent News</p>
			  <a class="hidden-xs" href="<?php bloginfo('url'); ?>/events">Recent News</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/events">View</a>

			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Performances</p>
			  <a class="hidden-xs" href="<?php bloginfo('url'); ?>/events">Performances</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/events">View</a>
			  
			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Birthday Parties</p>
			  <a class="hidden-xs no-border" href="<?php bloginfo('url'); ?>/general-info/birthday-parties">Birthday Parties</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/birthday-parties">View</a>
		</div><!--/.col-->
		<div class="col-sm-9 quotes b-left">
			<h3>Celebrating 35 Years as the Most Reputable<br />
			Performing Arts Academy in Tampa Bay
			</h3> 
			<h5 class="breakout">Voted one of the top 50 dance schools in the country.</h5>
			<p>Currently one of the Federation of Dance Competition's Top 25 schools in the Southeast Region, FDC People's Choice Award Winner, power ranked with the World Dance Championship Series, Victory Cup Winner and FDC Studio of Excellence.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Create Lasting Memories</h2> 
			<p>And build friendships for life.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="memories-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12 images">
		  <div class="col-sm-2"></div>
		  <div class="col-sm-2 stack rotated-left">
	        	<img src="<?php the_field('memories_img1'); ?>">
	      </div>
	      <div class="col-sm-2 stack rotated-middle">
	        	<img src="<?php the_field('memories_img2'); ?>">
	      </div>
	      <div class="col-sm-2 stack rotated-right">
	        	<img src="<?php the_field('memories_img3'); ?>">
	      </div>
	      <div class="col-sm-2"></div>

		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<section class="why">
	<div class="intro row" id="contain">
		<div class="col-sm-12 why">
		  <h3>Why Choose Us?</h3>
		  <p>We offer a complete performing arts curriculum with extensive classes in Tampa, FL for Dance, Acting, Voice and Music. Each program has a variety of levels and culminates in performances to share the student’s progression. Students who train at our Academy have the capability of becoming a triple threat performer, excelling in dance, acting and voice.</p>
		</div><!--/.why-->
	</div>
</section>




   
<div class="footer-contact overlay">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<a class="button gold" href="<?php bloginfo('url'); ?>/general-info/trial">Try a Free Trial Class Now</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>