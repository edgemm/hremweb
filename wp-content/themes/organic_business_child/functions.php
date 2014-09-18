<?php

// register sidebars
if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'Right Sidebar2', //Name your sidebar
        'description' => 'These widgets will appear in the left sidebar.',
        'before_widget' => '<div class="widget">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));
	
if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'Right Sidebar3', //Name your sidebar
        'description' => 'These widgets will appear in the left sidebar.',
        'before_widget' => '<div class="widget">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));
	
if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
        register_sidebar(array('name'=>'Right Sidebar4', //Name your sidebar
        'description' => 'These widgets will appear in the left sidebar.',
        'before_widget' => '<div class="widget">', // Displays before widget
        'after_widget' => '</div>', // Displayed after widget
        'before_title' => '<h3>', //Displays before title, after widget start
        'after_title' => '</h3>' //Displays after title
    ));

// SMC add Adwords Tracking to /Applications Page

function myjavascript_in_wp_footer($pid){
   if (is_page()) {
       global $post;
       if($post->ID=="52"){ // only for post Id = 123
            echo '
			
			<!-- Google Code for Hremtraining.com lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991593829;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "sGP1CJPD2QUQ5Yrq2AM";
var google_conversion_value = 1.000000;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/991593829/?value=1.000000&amp;label=sGP1CJPD2QUQ5Yrq2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

			
			';
       }
   }
}
add_action( 'wp_footer', 'myjavascript_in_wp_footer' );
	

?>