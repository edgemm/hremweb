<?php
/*
Template Name: Form Full 1
*/
?>

<?php get_header(); ?>

<div id="container">

	<div class="holder">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="wide">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h1><?php the_title(); ?></h1>
            
            <?php the_content(__("Read More", 'organicthemes'));?>
            
            <div id="landing-form">
            
            <?php echo do_shortcode('[contact-form-7 id="38" title="Apply Now"]'); ?>
            
            </div>
            
            <div style="clear:both;"></div>
			<?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
            
            <?php endwhile; else: ?>
            <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
			<?php endif; ?>
            
        </div>
		
	</div>
	
	</div>
			
</div>

<?php get_footer(); ?>