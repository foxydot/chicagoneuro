<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
<div class="container page-title">
	<div class="wrapper archives">
        <h1 class="archive-title"><?php printf( __( 'Category Archives: <span> %s</span>', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
        <?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
			printf( '<p>%s</p>', $term_description );
			endif;
		?>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="blog-content">
        	<div class="blog-left">
            	<?php
					
						// Start the Loop.
						while ( have_posts() ) : the_post();
		
							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
		
						endwhile;
						// Previous/next post navigation.
						//twentyfourteen_paging_nav();
		
					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );
		
					endif;
				?>
                
                <div class="pgntn-mn">
                	<div class="prev-nxt-arrow">
                    <div class="prv"><?php previous_posts_link( '' ); ?></div>
                    <div class="nxt"><?php next_posts_link( '' ); ?></div>
                  </div>
                  <div class="pagination">
                   		<?php wp_pagenavi(); ?>
                  </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
            
        </div>
    </div>
</div>
<?php
get_footer();