<?php get_header(); ?>



<div id="container">



	<div class="holder">



	<div id="content" class="left">	



		<div class="postarea">



			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            

            <div class="posttitle">		



				<h1><?php the_title(); ?></h1>



                

                    

            </div>

<?php

global $more;

$more = 0;

?>



			<?php the_content(__("", 'organicthemes'));?>

            

            

			<?php trackback_rdf(); ?>



			<div class="postapplynow">

            

            

           <h2>Enjoy Something New Everyday with a Career in Hotel, Restaurant &amp; Event Management</h2> <a href="/apply-now/"><strong>Apply Now!</strong></a>

           

           </div>

           



		</div>



        <div class="postcomments">

			<?php comments_template('',true); ?>

        </div>



		<?php endwhile; else: ?>

		<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>

		<?php endif; ?>



	</div>



	<?php include(TEMPLATEPATH."/sidebar_right.php");?>



	</div>



</div>



<?php get_footer(); ?>