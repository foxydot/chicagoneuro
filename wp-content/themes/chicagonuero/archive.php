<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
        <h1 class="page-title">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: <span>%s</span>', 'twentyfourteen' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: <span>%s</span>', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: <span>%s<span>', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

						else :
							_e( 'Archives', 'twentyfourteen' );

						endif;
					?>
		</h1>
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