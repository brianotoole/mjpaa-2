<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class="testimonials">
	  <div class="footer-contact">
		<div class="grid row">
			<div class="col-sm-12">
				<?php get_template_part( 'part', 'testimonials' ); ?>
			</div>
		</div><!--/.grid -->
	  </div><!--/.footer-contact -->
	</div><!--/.testimonials -->

	</section><!--/#content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-top grid grid-pad">
			<div class="award col-xs-6 col-sm-4">
				<h6>Hours of Operation</h6>
				<p><strong>Academy Hours:</strong><br />
				  <em> Mon-Fri: &nbsp; 10am-8:30pm<br />
				   Sat: &nbsp;9am-2pm</em></p><br />
				<p><strong>Business Hours:</strong><br />
				   <em>Mon-Fri: &nbsp;9am-5pm</em></p>
			</div><!-- .site-info -->
			<div class="links col-xs-6 col-sm-4">
				<h6 class="links">Links</h6>
				<ul>
				    <li><i class="fa fa-chevron-right"></i><a href="https://app.jackrabbitclass.com/portal/ppLogin.asp?id=505581">Customer Login</a></li>
				    <li><i class="fa fa-chevron-right"></i><a href="https://app.jackrabbitclass.com/reg.asp?id=505581">New Student Registration</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">News</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="https://www.google.com/maps/dir/28.0169633,-82.495373/15906+Mapledale+Blvd,+Tampa,+FL+33624/@28.0574974,-82.5354055,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2m2!1d-82.504962!2d28.098768" target="_blank">Directions</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">Events</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/about">About Us</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/general-info/birthday-parties">Birthday Parties</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="http://tbttt.org" target="_blank">Tampa Bay Triple Threat Theatre</a></li>
				</ul>
			</div><!-- .site-info -->
			<div class="col-xs-12 col-sm-4 stay-in-touch">
				<h6>Stay in Touch</h6>
				<ul>
					<li class="email"><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/general-info/newsletter">Sign-Up for our Email Newsletter</a></li>
					<p class="hidden-xs">
						<a href="tel:813-969-0240">PH: 813-969-0240</a><br />
						FAX: 813-960-2117
					</p>
					<p>
						15906 Mapledale Blvd.<br />
						Tampa, FL 33624
					</p>
					<a class="visible-xs button gold" href="tel:813-969-0240">Tap to Call Us</a>
					<div class="social-media">
						<ul>
							<a href="https://www.facebook.com/MaryJosPerformingArtsAcademy?fref=ts" target="_blank">
								<li class="no-pad"><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/MJPAA" target="_blank">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://instagram.com/mjpaa_tampa/" target="_blank">
								<li><i class="fa fa-instagram"></i></li>
							</a>
							<a href="https://www.youtube.com/maryjostampa" target="_blank">
								<li><i class="fa fa-youtube"></i></li>
							</a>
						</ul>
				    </div><!-- .social-media -->
			</div><!-- .site-info -->
			<!--<div class="ph col-sm-3">
				<h6>Calendar</h6>
					<p>calendar here</p>
			</div><!-- .col-->
        </div><!-- grid --> 
        
    	<div class="footer-bottom grid grid-pad">
			<div class="site-info col-sm-12">
				&copy; <?php echo date('Y'); ?> MJPAA.com | <a id="top" href="#"> Back To Top</a>
			</div><!-- .site-info -->
		
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>

<?php wp_footer(); ?>
<script>
// Init top-bar search
new UISearch( document.getElementById( 'sb-search' ) );
// Video modal
jQuery("#modal-btn").click(function(){
  $("#umVideo").modal('show');
});
</script>
<script type="text/javascript">
// Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64721160-1', 'auto');
  ga('send', 'pageview');
  

</script>
</body>
</html>