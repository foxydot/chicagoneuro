<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
    <div class="forms content-genral">
      <?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				?>
    </div>
  </div>
</div>
<?php
//get_sidebar();
get_footer();