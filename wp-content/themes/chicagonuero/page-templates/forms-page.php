<?php
/**
 * Template Name: Forms Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<!-- Middle -->

<div class="container page-title">
  <div class="wrapper">
    <?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
		?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php
		endwhile;
  ?>
  </div>
</div>
<div class="container">
  <div class="wrapper">
    <div class="forms content-genral">
      <?php
			$temp = $wp_query; 
			$wp_query = null; 
			$wp_query = new WP_Query(); 
			// The Query
			$wp_query = new WP_Query( array( 'posts_per_page' => '-1', 'post_type' => 'forms', 'order' => 'DESC') );
			$i = 1;
			?>
        <div class="forms_new">
            <h3>For Our Patients</h3>
            <ul>    
      <?php
			// The Loop
			while ( $wp_query->have_posts() ) : $wp_query->the_post();
			?>
              <li>
              
              	<?php $variable_name = get_post_meta($post->ID, 'pdf', true); ?>

				<?php if ($variable_name): ?>
                <?php $pdf_path = wp_get_attachment_url($variable_name); ?>
                <?php endif; ?>
              
                  <a href="<?php echo $pdf_path; ?>">
                  <img width="64" height="60" alt="pdf_icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/08/pdf_icon.png" class="alignnone size-full wp-image-169">
                  <?php the_title(); ?><br>
                  </a>
              </li>
      <?php 
           $i++;
           endwhile; 
           $wp_query = null; 
           $wp_query = $temp;  // Reset
      ?>
       </ul>
     </div>
    </div>
  </div>
</div>
<?php
//get_sidebar();
get_footer();