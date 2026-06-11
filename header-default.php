<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	<title>
		<?php wp_title('|',true,'right'); ?>
	</title>
	<meta name="theme-color" content="#ffffff">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/images/mask-icon.svg" color="#ffffff">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/manifest.json">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive.css" type="text/css" media="screen"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body <?php if(get_field('theme')) { echo 'class="'. get_field('theme') . '"' ; } else echo'class="default"'; ?>>
	<header>
		<?php get_sidebar('3'); ?>
		<div class="content">
			<div class="main-nav">
				<nav class="site">
					<?php wp_nav_menu('menu=Header Menu'); ?>
				</nav>
				<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>"/></a>
			</div>			
				<nav class="ecom">
					<ul>
					<?php echo do_shortcode("[woo_cart_but]"); ?>	
						<?php if ( is_user_logged_in() ) { ?>
        <li><a href="/?customer-logout=true" title="Logout"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M23 1.9c0-1-.9-1.9-1.9-1.9H10.3C9.1 0 8 .8 7.7 2.1c-.1.7 0 1.4 0 2.1 0 .1.1.2.1.3.2.3.5.4.8.3.3-.1.5-.4.5-.7V2.8c0-.8.5-1.3 1.3-1.3h5.9c-.3.1-.6.2-.9.4-.2 0-.4 0-.6.1-.9.3-1.3 1-1.3 2V18.7h-3.1c-.7 0-1.2-.5-1.3-1.3v-1.3c0-.4-.3-.8-.7-.8-.4 0-.7.3-.7.7v.7c0 .4 0 .8.1 1.2.3 1.3 1.3 2.2 2.6 2.2h3.1v1c.1 1.3 1.3 2.1 2.5 1.7 1.9-.6 3.9-1.3 5.8-1.9.8-.3 1.3-1 1.3-1.8C23 13.4 23 7.6 23 1.9zM21.6 19c0 .4-.1.5-.5.7l-5.4 1.8c-.1 0-.2.1-.3.1-.3 0-.5-.2-.5-.5V4c0-.4.1-.5.5-.6 1.8-.6 3.6-1.2 5.5-1.8.5-.2.8.1.8.6-.1 5.5-.1 11.2-.1 16.8z"/><path d="M10.4 10.6c.3-.3.3-.7 0-1l-.3-.3L6.8 6c-.2-.2-.5-.3-.8-.2-.5.1-.7.8-.3 1.2.7.6 1.3 1.2 1.9 1.8.1.2.3.3.5.5v.1H.9c-.2 0-.3 0-.5.1-.4.1-.5.5-.4.8.1.3.4.5.7.5H8c0 .1-.1.1-.1.2l-2.1 2.1c-.3.3-.3.8 0 1 .3.3.7.3 1 0 1.2-1.1 2.4-2.3 3.6-3.5z"/></svg>Logout</a></li>
        <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M0 12.2v-1.4c0-.3.1-.6.1-.8.3-2.3 1.2-4.3 2.8-6C4.7 2 6.9.7 9.5.3c.4-.1.8-.1 1.3-.2h1.4c.4.1.8.1 1.2.2 2.2.4 4.1 1.3 5.7 2.7 2 1.8 3.3 4 3.7 6.6.1.4.1.8.2 1.3v1.4c0 .3-.1.6-.1.8-.3 2.3-1.3 4.3-2.8 6.1-1.8 2-4 3.2-6.6 3.7-.4.1-.9.1-1.3.2H10.6c-2.3-.2-4.4-1-6.2-2.5-2.3-1.8-3.7-4.2-4.2-7-.1-.5-.1-1-.2-1.4zM20 17c2.6-3.9 2.2-9.7-2-13.3C13.9.3 7.8.6 4.1 4.6.5 8.4.8 13.8 3 17c.7-1 1.5-1.9 2.4-2.6 1-.7 2-1.3 3.2-1.6-.8-.6-1.4-1.4-1.8-2.3-.3-1.1-.4-2-.2-3S7.3 5.7 8 5c2-1.9 5-1.8 7 .1 2.1 2 2 5.8-.6 7.6 1.2.4 2.2.9 3.2 1.6 1 .8 1.8 1.7 2.4 2.7zM3.9 18.2s.1.1.1.2c2.7 2.8 5.9 3.8 9.7 3.1 2.1-.4 3.9-1.5 5.3-3.1.1-.1.1-.2 0-.4-.3-.4-.5-.8-.8-1.2-3.2-4-9.1-4.3-12.8-.7-.6.6-1.1 1.3-1.5 2.1zm11.3-9.6c0-2-1.6-3.7-3.7-3.7-2 0-3.7 1.6-3.6 3.7 0 2 1.6 3.7 3.7 3.7 1.9 0 3.6-1.7 3.6-3.7z"/></svg><?php _e('Account','woothemes'); ?></a></li>
        <?php }
else { ?>
        <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M15.3 13.2v-.1c-.1-.4-.5-.7-.9-.6-.4.1-.6.4-.6.8v4.1c0 .7-.5 1.3-1.3 1.3h-3V3.7c0-.8-.4-1.4-1.2-1.7-.4-.1-.8-.3-1.2-.4-.1 0-.3-.1-.4-.1h5.9c.8 0 1.3.5 1.3 1.3v4.1c0 .5.3.8.7.8.4 0 .7-.3.7-.8V2.6c0-1-.5-1.8-1.4-2.3-.3-.2-.6-.2-.9-.3H1.5C.6.3 0 1 0 2v17.1c0 .9.5 1.6 1.3 1.9.2.1.3.1.5.2 1.7.6 3.5 1.2 5.2 1.7 1.2.4 2.3-.2 2.5-1.4.1-.3 0-.7.1-1v-.3h3.3c1.3 0 2.5-1.1 2.5-2.4-.1-1.6-.1-3.1-.1-4.6zm-7.9 8.3c-1.8-.6-3.6-1.2-5.5-1.8-.4-.1-.5-.3-.5-.6V2.2c0-.5.3-.7.8-.6 1.8.5 3.6 1.1 5.5 1.7.3.2.4.3.4.7v17c0 .4-.3.6-.7.5z"/><path d="m22.8 9.5-.5-.5-3-3c-.2-.2-.5-.3-.8-.2-.5.2-.7.8-.3 1.2l2.2 2.2.2.2h-7.3c-.4 0-.6.2-.7.5-.2.5.2 1 .7 1h7.3l-2.3 2.3c-.3.3-.3.8 0 1.1.3.3.7.3 1 0 1.2-1.2 2.4-2.4 3.6-3.5.2-.5.2-1-.1-1.3z"/></svg><?php _e('Login','woothemes'); ?></a></li>
        <?php } ?>
		<li><a class="search" href="#"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M0 22.1c.1-.2.3-.4.4-.5l6-6 .2-.2c-.3-.4-.6-.7-.9-1.2C3.4 10.6 4 5.6 7.2 2.6 8.7 1.1 10.6.3 12.7 0h1.6c.5.1.9.1 1.4.2 3.6.8 6.5 3.8 7.1 7.4.1.4.1.7.2 1.1v1.2c-.1.5-.1 1-.2 1.4-1 3.8-3.4 6.3-7.3 7.1-2.9.6-5.5-.1-7.7-1.9-.1 0-.1-.1-.2-.2 0 .1-.1.2-.1.2l-6 6c-.3.2-.5.4-.6.5H.5c-.2-.1-.4-.3-.5-.5v-.4zm13.7-4.8c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8z"/></svg> Search</a>
		</li>
		</ul>
				</nav>
			</div>
		</div>		
	</header>
	<?php get_sidebar('4'); ?>