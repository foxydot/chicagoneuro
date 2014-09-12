<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<!-- Middle -->
<div class="container">
  <div class="slider-wrapper">
    <div class="responisve-container">
      
      <div class="slider">
        <div class="fs_loader"></div>
        
        <?php
			$temp = $wp_query; 
			$wp_query = null; 
			$wp_query = new WP_Query(); 
			// The Query
			$wp_query = new WP_Query( array( 'posts_per_page' => '-1', 'post_type' => 'slider', 'order' => 'ASC') );
			$i = 1;
			// The Loop
			while ( $wp_query->have_posts() ) : $wp_query->the_post();
			
			if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $background_size ); ?> 
            <?php endif; ?>
        
        		<?php if(get_custom_field("slide_image1") != "" && get_custom_field("slide_image2") != "") { ?>
                    <div class="slide" data-in="fade"> <img data-fixed src="<?php echo $image[0]; ?>" width="1400" height="489" data-delay="200" data-step="1">
                    	<img  src="<?php echo get_custom_field("slide_image2"); ?>" width="384" height="417" data-position="72,293" data-in="bottomRight" data-delay="500" data-step="2"> 
                        <img  src="<?php echo get_custom_field("slide_image1"); ?>" width="476" height="198" data-position="140,720" data-in="left" data-delay="500" data-out="left" data-step="2"> 
                    </div>
              	<?php } else { ?>
              
                    <div class="slide"  data-in="fade"> <img data-fixed src="<?php echo $image[0]; ?>" width="1400" height="489" data-delay="200"> 
                      <p class="<?php if($i==4) { echo 'foster'; } else { echo 'claim'; } ?>" data-position="80,200" data-in="top" data-step="1" data-out="top" ><?php echo get_the_title(); ?></p>
                      <p class="<?php if($i==4) { echo 'lremb'; } else { echo 'lrem'; } ?>" data-position="235,200" data-in="left" data-step="1"  data-delay="1500" data-out="fade"><?php echo get_the_content(); ?> </p>
                      <p class="teaser" data-position="325,200" data-in="left" data-step="1"  data-delay="1500" data-out="fade"><a href="<?php echo get_custom_field("slide_link"); ?> ">Learn how we work</a></p>
                   </div>
               <?php } ?>
           
            <?php 
                $i++;
                endwhile; 
                $wp_query = null; 
                $wp_query = $temp;  // Reset
            ?>
      </div>
      
    </div>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <div class="services">
      <?php dynamic_sidebar("home_box"); ?>
    </div>
  </div>
</div>
<div class="container training">
  <div class="wrapper">
    <?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
		// Include the page content template.
		the_content();
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
			}
		endwhile;
	?>
  </div>
</div>
<?php
//get_sidebar();
get_footer();