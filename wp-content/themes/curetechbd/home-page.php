<?php

/**
 Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CURETECHBD
 */

get_header(); ?>

<!-- Begin Slider-->
<section>
	<div class="autoplay mb-0">
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slider_1.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
		</div>
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slider_2.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
		</div>
	</div>
</section>
<!-- Begin Content-->
<div class="wrapper">
	<article class="container">
		<div class="row">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</article>
	<!--end Features-->

	<section class="clients">
		<div class="container">
			<div class="row">
				<h3 class="head-title">Our Clients</h3>
				<?php echo do_shortcode('[gslogo id=1]'); ?>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="container">
			<div class="col">
				<h3 class="head-title">About Us</h3>
				<p><strong>CureTech</strong> operates in IT field including solution, architecture, digital strategy, software, hardware, security & data protection, managed services and support.</p>
				<p>Established in 2008, <strong>CureTech</strong> operates in Australia, USA and Bangladesh.Our <strong>Trade License Number</strong>: TRAD/DNCC/009825/2022. We have delivered nearly 100 solutions of small to large size to 32 companies globally. We work through agile methodologies to deliver safe solution in quickest time.</p>
				<p>Our work is always KPI (Key Performance Indicator) driven – ROI, Revenue, Cost saving, efficiency. If our solution meets the KPI, we bill to customers. It is our promise. Our managed service and support services are also driven by SLA (Service Level Agreement).</p>
				<p>We have 28 in-house staff including managers, technical experts, developers, testers and analysts. We also have off-shore teams in India, Australia and USA.</p>
				<p><strong>Jalal Ahmed Mirza, Founder</strong></p>
				<p>Master in IT (Australia, 1998), Jalal worked in Australia, USA and UK before founding CureTech Ltd. in 2008. His other projects are tajabajar.com, ezkash.com, bachao.com and farianur.com. He likes to work P2P model and innovative digital businesses.</p>
				<p><strong>Sakeeb Khan, Manager, Projects</strong></p>
				<p>Bachelor of Science in Marketing (UK, 2009), Sakeeb had a long career in Tesco, the top retail chain in UK. Sakeeb worked as a marketing manager, project manager, retail manager in UK. He also served as a B2B manager at a large RMG group.</p>
			    <p><strong>Faria Islam, HR Manager</strong></p>
			    <p>Business Administration (NSU, 2003). With a diverse career spanning corporate companies, she currently serves as the HR Manager, specializing in recruitment, employee relations, and organizational development. She is particularly enthusiastic about leveraging HR software to streamline processes, enhance data management, and improve overall efficiency.</p>
			    <p><strong>Rashadul Islam, Manager, Digital Solution</strong></p>
			    <p>Bachelor degree in Electrical and Electronic Engineering from Stamford University Bangladesh, Java certification from Oracle Education. He led IT in reputed companies such as Middle State Education (USA), Projectheads.com.au, PMA Production USA. His passion is technology innovation, Olympiad and organizing ICT programs.</p>
				<p><strong>Monowar Perves, Operation Manager (Taja Bajar)</strong></p>
			    <p>MBA in Marketing(Jahangirnagar University, 2023). Monowar has gained extensive experience in logistics, project management, marketing, and merchandising before becoming the Operations Manager at Taja Bajar. He is committed to ensuring smooth daily operations and driving efficiency within the company’s rapidly growing marketplace.</p>
			    <p><strong>Mohammad Zaynal Abedin, Accounts</strong></p>
			    <p>Master’s degree (Political Science, DU), Zaynal has developed a robust career in financial management, focusing on salary administration and other critical financial matters within the office. His expertise encompasses managing payroll processes, budgeting, and financial reporting.</p>
				
			</div>
		</div>
	</section>

	<section class="ctl_team">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/jalal.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
				
					<div class="member-info">
						<h4>Jalal Ahmed Mirza</h4>
						<span>Founder</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sakeeb.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
					<div class="member-info">
						<h4>Sakeeb Khan<br></h4>
						<span>Manager, Projects</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/faria.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
					<div class="member-info">
						<h4>Faria Islam</h4>
						<span>HR Manager</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/rashad.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
					<div class="member-info">
						<h4>Md Rashadul Islam</h4>
						<span>Manager, Digital Solution</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/parvej.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
					<div class="member-info">
						<h4>Monowar Perves</h4>
						<span>Operation Manager (Taja Bajar)</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 member text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/zaynal.jpg" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
					<div class="member-info">
						<h4>Mohammad Zaynal Abedin</h4>
						<span>Accounts</span>
					</div>
				</div>
		
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container">
			<div class="row">
				<h3 class="head-title">Our Partners</h3>
				<?php echo do_shortcode('[logo-carousel id=default]'); ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>