<?php
/**
 * The template for displaying Author archive pages
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
        <h1 class="archive-title">
			<?php
			/*
			 * Queue the first post, that way we know what author
			 * we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop properly
			 * with a call to rewind_posts().
			 */
			the_post();
			printf( __( 'All posts by : <span>%s</span>', 'twentyfourteen' ), get_the_author() );
			?>
		</h1>
        <?php if ( get_the_author_meta( 'description' ) ) : ?>
			<!--<div class="author-description"><p><?php the_author_meta( 'description' ); ?></p></div>-->
		<?php endif; ?>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="blog-content">
        	<div class="blog-left">
            	<?php
					/*
					 * Since we called the_post() above, we need to rewind
					 * the loop back to the beginning that way we can run
					 * the loop properly, in full.
					 */
					rewind_posts();

					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
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