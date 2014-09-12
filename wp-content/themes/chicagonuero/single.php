<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container page-title">
	<div class="wrapper">
    	<h1>BLOG</h1>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="blog-content">
        	<div class="blog-left">
            	<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					
					setPostViews(get_the_ID());
	
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
	
						// Previous/next post navigation.
						//twentyfourteen_post_nav();
	
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					endwhile;
				?>
                
                <div class="next-prev">
                	<div class="nextpost">Next Post</div>
                  <div class="next-prev-arrow">
                    	<div class="prv"><?php previous_post('%','', 'no'); ?></div>
                    <div class="nxt"><?php next_post('%','', 'no'); ?></div>
                  </div>
                </div>
                
                <div class="wrtn-by-rltd-pst">
                	<div class="written-by">
                    	<h2>Written by</h2>
                        <div class="wrtn-by-mn">
                        	<div class="wrtn-by-img"><?php echo get_avatar( get_the_author_meta('email'), '90' ); ?></div>
                            <div class="wrtn-by-cntnt">
                            	<h3><?php echo get_the_author_link(); ?></h3>
                                <p><?php the_author_meta('description'); ?></p>
                                <!--<div class="wrtn-date">June 26, 2014</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="related-post">
                    	<?php dynamic_sidebar("related_post"); ?>
                        
                    </div>
                </div>
            </div>
             <?php get_sidebar(); ?>
            
        </div>
    </div>
</div>

<?php
//get_sidebar();
get_footer();