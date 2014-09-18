<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">


<?php the_field('google_header_code'); ?>


<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />
<meta name="verify-v1" content="7XvBEj6Tw9dyXjHST/9sgRGxGymxFdHIZsM6Ob/xo5E=" />
<meta name="viewport" content="width=436,user-scalable=yes" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="/wp-content/themes/organic_business_child/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/organic_business_child/style-ie.css" />
<![endif]-->

<?php get_template_part( 'style', 'options' ); ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e("RSS Feed", 'organicthemes'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e("Atom Feed", 'organicthemes'); ?>" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.anythingslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.anythingslider.video.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swfobject.js"></script>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	var $j = jQuery.noConflict();
	$j(document).ready(function () {
		$j('#slider1').anythingSlider({
			width           : 896,
			height          : 500,
			delay           : <?php echo of_get_option('slider_transition_interval'); ?>,
			resumeDelay     : 10000,
			startStopped    : false,
			autoPlay        : true,
			autoPlayLocked  : false,
			easing          : "swing"					
		});
	});
</script>

<script type="text/javascript"> 
	var $j = jQuery.noConflict();
	$j(document).ready(function () {
		$j('#homeslider iframe').each(function() {
			var url = $j(this).attr("src")
			$j(this).attr("src",url+"&amp;wmode=Opaque")
		});
	});
</script>

<script type="text/javascript"> 
	var $j = jQuery.noConflict();
	$j(document).ready(function() { 
		$j('.menu').superfish(); 
	});
</script>

</head>

<body <?php if(function_exists('body_class')) body_class(); ?>>

<div id="wrap">

    <div id="header">
    
    	<div id="headercontent">
    	
	        <div class="logo">
	            <h1 id="title"><a href="<?php echo get_option('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a></h1>
	        </div>
                       <div id="phone">
                       
                       Call Now <a href="tel:+18008681816">800.868.1816</a>
                       
                        </div>
	        
	        <span id="navpad"></span>
	        
	        <?php if ($_GET['nav'] !== 'no') { ?>
            <div id="navigation">
				<?php if ( function_exists('wp_nav_menu') ) { // Check for 3.0+ menus
	            wp_nav_menu( array( 'title_li' => '', 'depth' => 4, 'container_class' => 'menu' ) ); }
	            else {?>
	            <ul class="menu"><?php wp_list_pages('title_li=&depth=4'); ?></ul>
	            <?php } ?>
	        </div>
            <?php } ?>
        
        </div>

    </div>
    
    <div style="clear:both;"></div>