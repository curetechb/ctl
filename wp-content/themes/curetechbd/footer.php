<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CURETECHBD
 */
?>
	<!-- Begin Footer-->
	<footer id="colophon" class="site-footer">
		<!-- CureTech Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<section class="widget widget_text">
							<h2 class="widget-title">CureTech Limited</h2>
							<div class="textwidget">
								<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"><br><br>
								<address>
									<strong>Email: </strong><a href="mailto:info@curetechbd.com">info@curetechbd.com</a><br>
									<strong>Address 1: </strong>Sagufta Tower, House- TA136, (1st Floor), Gulshan Badda Link Road, Dhaka 1212.<br>
									<strong>Address 2: </strong>Australia Office: 29 McRitchie Cct, Nicholls, ACT 2913. <br>
									<strong>Address 3: </strong>UAE Office: Block B, Office-B19-025, Sharjah, United Arab Emirates
								</address>
							</div>
						</section>
					</div>
					<div class="col-md-4">
						<section class="widget widget_text">
							<h2 class="widget-title">Quick Links</h2>
							<?php
							$footer_menu = array(
								'theme_location'  => 'primary',
								'container'       => 'div',
								'container_class' => 'footer-menu',
								'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
							);
							wp_nav_menu( $footer_menu );
							?>
						</section>
					</div>
					<div class="col-md-4">
						<section class="widget widget_text">
							<h2 class="widget-title">Social Media</h2>
							<ul class="social">
								<li><a href="https://twitter.com/curetechbd" class="twitter" title="Contact Twitter" alt="twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" style="width:50px; height:50px"></a></li>
								<li><a href="https://web.facebook.com/curetechbd.ltd" class="facebook" title="Contact Facebook" alt="facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"  style="width:50px; height:50px"></a></li>
								<!-- <li><a href="https://www.youtube.com/channel/UCREnTDQKSzU0V8JGMiLYvqQ" class="youtube" title="Contact YouTube" alt="youtube" target="_blank"><i class="fa-2x fa fa-youtube"></i></a></li> -->
								<li><a href="https://www.linkedin.com/company/curetechbd/" class="linkedin" title="Contact LinkedIn" alt="linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"  style="width:50px; height:50px"></a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- CureTech Footer Copyrights -->
		<div class="footer-copy">
			<div class="container text-center">
				<P>&copy; 2008 - <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">CureTech Bangladesh Limited</a> | All Rights Reserved</P>
				<P><!-- Design & Developed by <a href="https://www.linkedin.com/in/itsrashad/" target="_blank">itsRashad</a> --> <a href="#"><i class="fa-2x fas fa-arrow-square-up"></i></a> <span class="top"></span></P>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>