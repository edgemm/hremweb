<?php get_header(); ?>



<div id="container">



	<div class="holder">



	<?php if(of_get_option('display_slider') == '1') { ?>

    

    <span id="hrem"><h1>HOTEL, RESTAURANT AND EVENT MANAGEMENT PROGRAM</h1></span>

    

	<div id="homeslider">

	

	    <ul id="slider1">

	        <?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_slider'),'posts_per_page'=>of_get_option('postnumber_slider'))); ?>

	        <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>

	        <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>

	        <?php global $more; $more = 0; ?>

	        <li>

	        	<a class="slideinfo" href="<?php the_permalink() ?>" rel="bookmark">

	        		<h2><?php the_title(); ?></h2>

	        		<?php the_excerpt(); ?>

	        		<span class="morearrow"></span>

	        	</a>

	        	<!--<div class="clear"></div>-->

	            <?php if ( $video ) : ?>

	                <div class="feature_video"><?php echo $video; ?></div>

	            <?php else: ?>

	                <a class="feature_img" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-feature' ); ?></a>

	            <?php endif; ?>

	        </li>

	        <?php endwhile; ?>

	        <?php else : // do not delete ?>

			<?php endif; // do not delete ?>

	    </ul>

	    

	</div>

	<?php } else { ?>

	<?php } ?>

    

    <div id="homepage">

    

    	<?php if(of_get_option('display_banner') == '1') { ?>

    	<div id="textbanner">
        

    		
  <h1>A Rewarding Career in Just 9 Months</h1>
        <p>Imagine Something New Everyday with a Career in Hotel, Restaurant & Event Management!</p>
		<p><a href="/apply-now/">Apply Now</a></p>
    		

    	</div>

    	<?php } else { ?>

    	<?php } ?>

        

        <?php if(of_get_option('display_projects') == '1') { ?>

        <div class="homecontent first">



			



			<?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_projects'), 'posts_per_page'=>of_get_option('postnumber_projects'), 'paged'=>$paged)); ?>

            <?php $first_or_second = 'first'; ?>

			<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $facebook = $meta_box['custom_meta_facebook'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $twitter = $meta_box['custom_meta_twitter'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $linkedin = $meta_box['custom_meta_linkedin'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $link = $meta_box['custom_meta_link'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $rss = $meta_box['custom_meta_rss'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $tagline = $meta_box['custom_meta_tagline'][0]; ?>

			<?php $meta_box = get_post_custom($post->ID); $launch = $meta_box['custom_meta_launch'][0]; ?>

            <?php global $more; $more = 0; ?>

            

            <div class="homepost <?php echo $first_or_second; ?>">

            <?php $first_or_second = ('first'==$first_or_second) ? 'second' : 'first'; ?>

            	

            	<h2 class="hometitle"><?php the_title(); ?></h2>

            	<a class="launch" href="<?php the_permalink() ?>" rel="bookmark"><?php _e("Launch", 'organicthemes'); ?></a>

            	

            	<?php if ( $video ) : ?>

            	    <div class="homevideo"><?php echo $video; ?></div>

            	<?php else: ?>

            	    <a class="homeimg" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>

            	<?php endif; ?>

            	

            	<div class="homeinfo">



                	



                	<div class="hometext">

                		<?php if ( $tagline ) : ?>

                			<h6><?php echo $tagline; ?></h6>

                		<?php else: ?>

                		<?php endif; ?>

                		<?php the_excerpt(); ?> <a href="<?php the_permalink() ?>" rel="nofollow">Read More...</a>

                	</div>

                	

                </div>



            </div>

                

            <?php endwhile; ?>

            

            <div id="pagination">

                <?php if (function_exists("number_paginate")) { number_paginate(); } ?>

            </div>

            

            <?php else : ?>

			<?php endif; ?>

			

		</div>

		<?php } else { ?>

		<?php } ?>



	</div>

	

	</div>

	

</div>



<?php get_footer(); ?>