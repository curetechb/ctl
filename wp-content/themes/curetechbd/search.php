<?php
/**
 * The template for displaying search results pages.
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
                        <?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'curetechbd' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' );?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
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