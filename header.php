<!DOCTYPE html>
<html>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php if ( is_home() || is_front_page() ) {
			bloginfo( 'name' );
			if( get_bloginfo( 'description' ) )
				echo ' | ' ; bloginfo( 'description' );
            } elseif (is_404()) {
            echo '404 Not Found';	echo ' | ' ; bloginfo( 'name' );
            } elseif (is_category()) {
            echo 'Category:'; wp_title('');
            } elseif (is_search()) {
            echo 'Search Results';  echo ' | ' ; bloginfo( 'name' );
            } elseif ( is_day() || is_month() || is_year() ) {
            echo 'Archives:'; wp_title('');
            } else {
            echo wp_title(''); 	echo ' | ' ; bloginfo( 'name' );
            }
            ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<header id="branding">
		<div id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
		<div id="tagline"><?php bloginfo('description'); ?></div>
	</header>
	<nav id="top_nav">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</nav>