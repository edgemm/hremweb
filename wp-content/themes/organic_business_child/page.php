<?php get_header(); ?>

<div id="container">

	<div class="holder">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="left">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
global $more;
$more = 0;
?>
            
          <?php the_content( $more_link_text , $strip_teaser ); ?> <div style="clear:both;"></div><?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
            
            <?php endwhile; else: ?>
			<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
			<?php endif; ?>
            
        </div>
		
	</div>
			
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>
	
	</div>

</div>

<?php get_footer(); ?>