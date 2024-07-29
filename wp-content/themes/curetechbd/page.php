<?php
/**
 * The template for displaying all single posts.
 *
 * @package CURETECHBD
 */
get_header(); ?>
	<!--begin Content-->
		<section>
			<article>
				<div class="container">
					<div class="row">
						<div class="col-md-9">
                        <?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
                        <?php endwhile; ?>
						</div>
						<div class="col-md-3">
							<div class="sidebar">
                            <?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	<!--end Content-->
<?php get_footer(); ?>