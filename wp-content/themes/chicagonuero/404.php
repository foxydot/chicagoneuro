<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container page-title">
	<div class="wrapper">
    	<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="forms content-genral">
        	
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

			<?php get_search_form(); ?>
            
        </div>
    </div>
</div>

<?php
//get_sidebar();
get_footer();