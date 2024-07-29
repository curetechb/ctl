<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CURETECHBD
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('news-single-item'); ?>>
  <figure><?php the_post_thumbnail( 'full', array( 'class' => 'img-thumbnail') ); ?></figure>
  <h2><?php the_title(); ?></h2>
  <?php the_excerpt(); ?>
</div>
