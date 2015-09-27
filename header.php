<!doctype html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo iwc_images('favicon.ico'); ?>" type="image/x-icon" />
	<!-- Add bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!--ADD FONT AWESOME http://fortawesome.github.io/Font-Awesome/-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/bootstrap/css/font-awesome.min.css'; ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

    <header>
        <div id="logo-container">
            <a id="logo-link" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
            	<img src="<?php echo iwc_images('main_logo.jpg'); ?>" id="logo" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>

        <nav>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>				      
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 3,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_page_menu',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
                );
                //navbar-nav
                ?>
            </div>
        </nav>
    </header>
