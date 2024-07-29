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
	<?php echo do_shortcode('[rlslider id=4525]'); ?>

	<!-- Begin Content-->
	<div class="wrapper">
		<article class="container">
			<div class="row">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>    
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
					<p>Established in 2008, <strong>CureTech</strong> operates in Australia, USA and Bangladesh. We have delivered nearly 100 solutions of small to large size to 32 companies globally. We work through agile methodologies to deliver safe solution in quickest time.</p>
					<p>Our work is always KPI (Key Performance Indicator) driven – ROI, Revenue, Cost saving, efficiency. If our solution meets the KPI, we bill to customers. It is our promise. Our managed service and support services are also driven by SLA (Service Level Agreement).</p>
					<p>We have 28 in-house staff including managers, technical experts, developers, testers and analysts. We also have off-shore teams in India, Australia and USA.</p>
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