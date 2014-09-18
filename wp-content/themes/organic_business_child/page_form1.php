<?php
/*
Template Name: Form 1
*/
?>


<?php get_header(); ?>

<div id="container">

	<div class="holder">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="left">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            
            <?php the_content(__("Read More", 'organicthemes'));?><div style="clear:both;"></div>
            
            <div id="landing-form">
            
            <?php echo do_shortcode('[contact-form-7 id="38" title="Apply Now"]'); ?>
            
            </div>
            
            <?php endwhile; else: ?>
			<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
			<?php endif; ?>
            
        </div>
		
	</div>
			
	<?php include("sidebar_right2.php");?>
	
	</div>

</div>

<?php get_footer(); ?>