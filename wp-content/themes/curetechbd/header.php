<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CURETECHBD
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    
    <!--CureTech Favicon-->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  <!-- <style>
    .kiwi-logo-carousel li:nth-child(8) img {
   width: 90px !important;
}
  </style> -->
</head>

<body <?php body_class(); ?>>
<header>
  <!-- CureTech Top Bar-->
  <div class="topbar">
      <div class="container">
          <ul class="social">
            <li><a href="https://x.com/CureTechbd2024" class="twitter" title="Contact Twitter" alt="twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="image" style="width:18px; height:18px"></a></li>
            <li><a href="https://web.facebook.com/curetechbd.ltd" class="facebook" title="Contact Facebook" alt="facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="image" style="width:20px; height:20px"></a></li>
            <!-- <li><a href="https://www.youtube.com/channel/UCREnTDQKSzU0V8JGMiLYvqQ" class="youtube" title="Contact YouTube" alt="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li> -->
            <li><a href="https://www.linkedin.com/company/curetechbd/?viewAsMember=true" class="linkedin" title="Contact LinkedIn" alt="linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="image" style="width:20px; height:20px"></a></li>

      </ul>
          <ul class="top-menu">
              <li><a href="mailto:info@curetechbd.com"><i class="fa fa-envelope-o"></i>info@curetechbd.com</a></li>
              <!-- <li><a href="tel:+8801626527790"><i class="fa fa-phone"></i> +8801626-527790</a></li> -->
          </ul>
      </div>
  </div>

  <!--CureTech Navbar-->
  <nav role="navigation" class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
      </div>

        <?php
        $top_menu = array(
          'theme_location'  => 'primary',
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'menu_class'      => 'nav navbar-nav menu-effect',
        );
        wp_nav_menu( $top_menu );
        ?>
      </div>
    </nav>
  </header>
  <div id="content" class="site-content">