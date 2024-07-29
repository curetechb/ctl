<?php
/**
 * @package CURETECHBD
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('news-single-item'); ?>>
  <figure><?php the_post_thumbnail(); ?></figure>
  <h2><?php the_title(); ?></h2>
  <?php the_excerpt(); ?>
</div>
