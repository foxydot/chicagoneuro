<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<style type="text/css">
.blog-category ul li:last-child
{
    border-bottom: none;
}
</style>
<div class="blog-right">
            	<div class="blog-search-mn">
                
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                  <input type="text" class="inpt-blog-search" value="Search" onFocus="if(this.value=='Search')this.value='';" onBlur="if(this.value=='') { this.value = 'Search'; }" name="s" id="s" />
                  <input type="submit" id="searchsubmit" class="" value="" style="display:none;" />
            </form>
                
                </div>
                <div class="blog-category">
                	<?php dynamic_sidebar("blog_cat"); ?>
                </div>
             	<div class="newsletter">
                	<?php dynamic_sidebar("newsletter_sidebar"); ?>
                </div>
                <div class="recent-post">
                	<h2>recent post</h2>
                    <ul>
						<?php
                        $args = array(  'numberposts'  => 5,  /* get 4 posts, or set -1 for all */
                                        'orderby'      => 'meta_value',  /* this will look at the meta_key you set below */
                                        'meta_key'     => 'post_views_count',
                                        'order'        => 'DESC',
                                        'post_type'    => 'post',
                                        'post_status'  => 'publish'
                                    );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) :  setup_postdata($post); ?>
                        
                        
                        <li>
                        	<div class="post-img"><?php echo get_avatar( get_the_author_meta( 'ID' ), 55 ); ?></div>
                            <div class="post-mn">
                            	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                <div class="post-date"><?php echo get_the_date(); ?></div>
                            </div>                        
                       </li>    
                      <?php // echo getPostViews(get_the_ID()); ?>
                            
                        <?php endforeach; ?>
                    </ul>
                    
                </div>
                <div class="popular-tags">
                    <div class="tags">
                    <?php dynamic_sidebar("popular_tag"); ?>	
                    </div>
                </div>
                <div class="latest-tweets">
                	<h2>Latest Tweets</h2>
                  <div class="tweet-mn">
                    <?php dynamic_sidebar("latest_tweets"); ?>	
                  </div>
                </div>
            </div>