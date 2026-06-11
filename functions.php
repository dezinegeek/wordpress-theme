<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Footer Copyright Block',
		'id' => 'sidebar-0',
		'before_widget' => '<div class="block copyright">',
		'after_widget' => ' </div>',
	) );
	register_sidebar( array(
		'name' => 'Footer Address Block',
		'id' => 'sidebar-1',
		'before_widget' => '<div class="block address">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Footer Social Block',
		'id' => 'sidebar-2',
		'before_widget' => '<div class="block social">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Header Ticker Block',
		'id' => 'sidebar-3',
		'before_widget' => '<div class="ticker">',
		'after_widget' => '</div>',
	) );
		register_sidebar( array(
		'name' => 'Header Search Block',
		'id' => 'sidebar-4',
		'before_widget' => '<div class="search-form">',
		'after_widget' => '</div>',
	) );
		register_sidebar( array(
		'name' => 'Related Products Block on Single Product Page',
		'id' => 'sidebar-5',
		'before_widget' => '<div class="related">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );	
}

// For Featured Image.
add_action( 'widgets_init', 'arphabet_widgets_init' );
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );
}

// For the Block Editor.
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
	add_editor_style();	
	add_theme_support( 'editor-styles' );
}

//Excerpt Length 
function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Disabling Widget Block Editior 
function example_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

//WooCommerce Theme Support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Remove WooCommerce breadcrumbs 
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

//Remove WooCommerce Tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

//Remove WooCommerce Image Zoom
function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );


//Custom Shortcode for Perfume Notes Section
function note_shortcode( $atts , $content = null ) {
	// Output the HTML code with the shortcode text as the message
	return '<div class="note">' . $content . '</div>';
}
add_shortcode( 'note', 'note_shortcode' );


//Adding WooCommerce Shopping Cart Icon on Menu 
add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>

<li><a class="cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
	<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M18.3 23H17.5c-1.2-.2-1.9-.9-2.3-2 0-.1-.1-.1-.2-.1h-4.2c-.1 0-.2 0-.2.2-.3.8-.8 1.4-1.5 1.7l-.9.3h-.7c-.2 0-.3-.1-.5-.1-1.2-.4-2-1.5-2-2.8V3.1c0-1-.6-1.6-1.6-1.6H.9C.5 1.4.2 1.2 0 .9V.5C.1.3.3.1.5 0H4c1.2.3 2 1 2.3 2.1.1.3.1.7.1 1.1v1.1H22.1c.4 0 .7.1.9.5v7.8c0 .2-.1.3-.1.5-.4 1.6-1.8 2.7-3.5 2.7h-13v1.9c1.7-1 3.8 0 4.3 1.8H15c.2 0 .3-.1.3-.2.4-1.2 1.5-1.9 2.7-1.9 1.2 0 2.3.8 2.7 1.9.4 1.2 0 2.4-1 3.2-.4.2-.9.4-1.4.5zm3.3-17.3H6.4v8.7H19.7c1.1-.2 1.8-1.1 1.8-2.2V5.9c.2-.1.1-.1.1-.2zm-3.6 13c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5c0-.9-.7-1.5-1.5-1.5zm-10.1 0c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5c0-.9-.7-1.5-1.5-1.5z"/></svg> Cart

  <?php
        if ( $cart_count > 0 ) {
       ?>
  <span class="cart-contents-count"><?php echo $cart_count; ?></span>
  <?php
        }
        ?>
  </a></li>
<?php
	        
    return ob_get_clean();
 
}
add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count( $fragments ) { 
    ob_start();    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();    
    ?>
<a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
<?php
    if ( $cart_count > 0 ) {
        ?>
<span class="cart-contents-count"><?php echo $cart_count; ?></span>
<?php            
    }
        ?>
</a>
<?php 
    $fragments['a.cart-contents'] = ob_get_clean();    
    return $fragments;
}


// Removing WooCommerce Related Products Section 

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 )


?>