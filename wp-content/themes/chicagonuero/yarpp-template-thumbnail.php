<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h2>Related Post</h2>
<div class="wrtn-by-mn">
<?php if (have_posts()):?>                     
	<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()):?>
        <div class="wrtn-by-img"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="wrtn-by-cntnt">
            <h3><?php echo get_the_author_link(); ?></h3>
            <p><?php the_title( ); ?></p>
            <div class="wrtn-date"><?php echo get_the_date(); ?></div>
        </div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
<p>No related post.</p>
<?php endif; ?>
</div>