<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php
		if ( is_single() ) :
		?>


<div class="blog-mn">
               	  <h2><?php the_title( ); ?> </h2>
                    <div class="blog-img"><?php echo get_the_post_thumbnail($postid, 'thumbnail'); ?></div>
                    <div class="by-mn">
                    	<div class="by-date">by <span class="author_links"><?php echo the_author_posts_link(); ?></span> on <?php echo get_the_date(); ?></div>
                        <div class="cmnts"><span class="comment_count"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( 'Comment | 1', 'twentyfourteen' ), __( 'Comments | %', 'twentyfourteen' ) ); ?>
      </span></div>
                        <div class="views"><?php if(function_exists('the_views')) { the_views(); } ?></div>
                    </div>
                    <p><?php the_content(); ?></p>
                </div>
<div class="tags-share">
                	<div class="lft">
                    	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
                    </div>
                  <div class="rght">
                   	<div class="share-wth-frnds">Share with friends</div>
                        <div class="share-icon"><?php echo do_shortcode("[ssba]"); ?></div>
                  </div>
                </div>

<?php    
		elseif(is_search()) :	
		?>
<div class="blog-mn">
    <h2><a href="<?php the_permalink(); ?>">
      <?php the_title( ); ?>
      </a></h2>
    <p>
      <?php the_excerpt(); ?>
    </p>
</div>
<?php
			else :
			?>
<div class="blog-mn">
  <h2><a href="<?php echo esc_url( get_permalink() ); ?>">
    <?php the_title( ); ?>
    </a></h2>
  <div class="blog-img">
    <?php $postid = get_the_ID(); ?>
    <?php  echo get_the_post_thumbnail($postid, 'thumbnail'); ?>
    <!--<img src="images/blog1.jpg" alt=" " />--></div>
  <div class="by-mn">
    <div class="by-date">by <span class="author_links"><?php echo the_author_posts_link(); ?></span> on <?php echo get_the_date(); ?></div>
    <div class="cmnts"><span class="comment_count">
      <?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( 'Comment | 1', 'twentyfourteen' ), __( 'Comments | %', 'twentyfourteen' ) ); ?>
      </span></div>
    <div class="views">
      <?php if(function_exists('the_views')) { the_views(); } ?>
    </div>
  </div>
  <p><?php the_content( __( '<div class="read-more">Read More</div>', 'twentyfourteen' ) ); ?></p>
</div>
<?php 
            endif;
?>
