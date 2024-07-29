<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package CURETECHBD
 */

get_header(); ?>

	<section>
			<article>
				<div class="container">
					<div class="row">
						<div class="col-md-9">
                        <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'curetechbd' ); ?></h1>
                        <div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'curetechbd' ); ?></p>
					<?php get_search_form(); ?>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					<?php if ( curetechbd_categorized_blog() ) : ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'curetechbd' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>Try looking in the monthly archives.</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
				</div>
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
<?php get_footer(); ?>
