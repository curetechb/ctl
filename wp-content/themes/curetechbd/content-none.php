<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CURETECHBD
 */
?>

<!--begin Content-->
		<section>
			<article>
				<div class="container">
					<div class="row">
						<div class="col-md-9">
 <h1 class="page-title"><?php _e( 'Nothing Found', 'curetechbd' ); ?></h1>
  <div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'curetechbd' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'curetechbd' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'curetechbd' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
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
	<!--end Content-->
