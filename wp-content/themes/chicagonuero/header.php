<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:700,300,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fractionslider.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
<?php wp_head(); ?>
</head>

<body>

<!-- Header -->

<div class="container">
  <div class="wrapper">
    <div class="header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo" title="Chicago Nuero"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Chicago Nuero Logo" /></a>
      <div class="top-right">
        <div class="search-mn">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" class="inpt-search" value="" name="s" id="s" placeholder="Search" />
            <input type="submit" id="searchsubmit" class="sb-search-submit" value="" style="display:none;" />
          </form>
        </div>
        <div class="nav fontsforweb_fontid_5903">
          <div class="animenu">
            <input type="checkbox" id="button" />
            <label for="button">Menu</label>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Main Menu', 'menu_class' => 'nav-menu', 'container' => 'ul' ) ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>