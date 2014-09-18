<?php
/*
Template Name: Form Google 2
*/
?>


<?php get_header(); ?>

<div id="container">

	<div class="holder">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="left">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h1><?php if ($_GET['kw']) {echo ucwords($_GET['kw']); } else { the_title(); } ?></h1>

            <?php the_content(__("Read More", 'organicthemes'));?><div style="clear:both;"></div>
            
            <div id="landing-form">
            
			<?php echo do_shortcode('[contact-form-7 id="354" title="Apply Now_Google"]'); ?>            

            </div>
            
            <?php endwhile; else: ?>
			<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
			<?php endif; ?>
            
        </div>
		
	</div>
			
	<?php include("sidebar_right4.php");?>
	
	</div>

</div>

<?php get_footer(); ?>