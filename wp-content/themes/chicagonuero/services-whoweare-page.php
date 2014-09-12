<?php
/**
 * Template Name: Services and Who we are Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<div class="container page-title">
  <div class="wrapper">
    <h1>
      <?php the_title(); ?>
    </h1>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <div class="content">
      <div class="content-lft">
        <?php $menu_name = get_post_meta($post->ID, 'left_menu', true);	 ?>
        <?php if($menu_name != "") { wp_nav_menu( array( 'theme_location' => '', 'menu' => $menu_name, 'menu_class' => '', 'container' => 'ul' ) ); } ?>
      </div>
      <div class="content-rght">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="content-banner">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <?php } ?>
        <?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				?>
      </div>
    </div>
  </div>
</div>
<?php
//get_sidebar();
get_footer();