<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- footer -->
<div class="container footer">
  <div class="wrapper">
    <div class="quick-contact"> <?php echo do_shortcode('[contact-form-7 id="226" title="Quick Contact"]'); ?> </div>
    <div class="address">
      <?php dynamic_sidebar("footer_address"); ?>
    </div>
  </div>
</div>
<div class="copyright container">
  <div class="wrapper">
    <?php dynamic_sidebar("footer_copyright"); ?>
  </div>
</div>
<?php wp_footer(); ?>
</body></html>