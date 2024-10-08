<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header><!-- .page-header -->
            
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
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