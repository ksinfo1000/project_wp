<?php
/**
 * Crumina themes functions
 */

/*Including other theme components*/

require_once locate_template('/inc/includes.php');


/**
 * Theme Wrapper
 *
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */

// returns WordPress subdirectory if applicable

function wp_base_dir()
{
	preg_match('!(https?://[^/|"]+)([^"]+)?!', site_url(), $matches);
	if (count($matches) === 3) {
		return end($matches);
	} else {
		return '';
	}
}

// opposite of built in WP functions for trailing slashes

function leadingslashit($string)
{
	return '/' . unleadingslashit($string);
}

function unleadingslashit($string)
{
	return ltrim($string, '/');
}

function add_filters($tags, $function)
{
	foreach ($tags as $tag) {
		add_filter($tag, $function);
	}
}

function is_element_empty($element)
{
	$element = trim($element);
	return empty($element) ? false : true;
}

// Limit content function

function content($num)
{
	global $post;
	$theContent = get_the_excerpt();
    if ($theContent == '') {
        $theContent = get_the_content();
    }
	$output = preg_replace('/<img[^>]+./', '', $theContent);
	$output = preg_replace('/<blockquote>.*<\/blockquote>/', '', $output);
	$output = preg_replace('|\[(.+?)\](.+?\[/\\1\])?|s', '', $output);
	$output = strip_tags($output);
	$limit = $num + 1;
	$content = explode(' ', $output, $limit);
	array_pop($content);
	$content = implode(" ", $content) . '<a href="'. get_permalink($post->ID) . '"> '.__('Read More','crum').'</a>';
	echo $content;
}

/* Theme setup options*/


// Make theme available for translation
load_theme_textdomain('crum', get_template_directory() . '/lang');

// Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
register_nav_menus(array(
'primary_navigation' => __('Primary Navigation', 'crum'),
'footer_menu' => __('Footer navigation', 'crum'),
));

// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
add_theme_support('post-thumbnails');


// Add post formats (http://codex.wordpress.org/Post_Formats)
add_theme_support('post-formats', array('gallery', 'video', 'link'));

// Tell the TinyMCE editor to use a custom stylesheet
add_editor_style('assets/css/editor-style.css');


function mytheme_setup() {
    // Set default values for the upload media box
    update_option('image_default_link_type', 'none' );
    update_option('image_default_size', 'large' );
    add_option('purchase-form', '<div class="wrap"><form method="post" action="admin.php?page=redux_options"><h2>Please enter your purchase code</h2><input type="text" style="width:250px;" name="panel_name"><input type="submit" class="button-primary" value="Submit code"></form>' );
    add_option('purchase-message', '<p>Enter your purchase code, which you can find following this instruction <a href="http://crumina.net/how-to-find-your-themeforest-item-purchase-code/" target="_blank"><strong>How to get purchase code</strong></a></p><h3>It will enable you:</h3><ol><li>to use full functionality of the theme</li><li>you will get complete support on the theme on our support forum <a href="http://support.crumina.net/"  target="_blank">http://support.crumina.net</a></li><li>you will be able to get free theme updates on <a href="http://themeforest.net/item/second-touch-powerful-metro-styled-theme/5681032"  target="_blank">http://themeforest.net/</a></li></ol></div>' );

}
add_action('after_setup_theme', 'mytheme_setup');



add_filter('widget_text', 'do_shortcode');

add_post_type_support('page', 'excerpt');


/*
 * Woocommerce support
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Redefine woocommerce_output_related_products()
function woocommerce_output_related_products() {
    woocommerce_related_products(3,3); // Display 4 products in rows of 4
}

// star rating for proucts in loop
add_action( 'woocommerce_after_shop_loop_item', 'wc_product_rating_overview', 15 );
if ( ! function_exists( 'wc_product_rating_overview' ) ) {
    function wc_product_rating_overview() {
        global $product;
        echo '<span class="show">' . $product->get_rating_html() . '</span>';
    }
}


/**
 * Hook in on activation
 */
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'yourtheme_woocommerce_image_dimensions', 1 );

/**
 * Define image sizes
 */
function yourtheme_woocommerce_image_dimensions() {
    $catalog = array(
        'width' 	=> '280',	// px
        'height'	=> '280',	// px
        'crop'		=> 1 		// true
    );

    $single = array(
        'width' 	=> '430',	// px
        'height'	=> '600',	// px
        'crop'		=> 0 		// true
    );

    $thumbnail = array(
        'width' 	=> '120',	// px
        'height'	=> '120',	// px
        'crop'		=> 0 		// false
    );

    // Image sizes
    update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
    update_option( 'shop_single_image_size', $single ); 		// Single product image
    update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * Enqueue the Souce sans font.
 */
function crumina_enq_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'glider_source_sans', "$protocol://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic&subset=latin,latin-ext");
}

add_action( 'wp_enqueue_scripts', 'crumina_enq_fonts' );

function custom_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_filter('next_posts_link_attributes', 'posts_link_attributes_1');

add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');


function posts_link_attributes_1() {
    return 'class="older"';
}
function posts_link_attributes_2() {
    return 'class="newer"';
}

function performance( $visible = false ) {
    $stat = sprintf(  '%d queries in %.3f seconds, using %.2fMB memory',
        get_num_queries(),
        timer_stop( 0, 3 ),
        memory_get_peak_usage() / 1024 / 1024
    );
    echo $visible ? $stat : "<!-- {$stat} -->" ;
}
add_action( 'wp_footer', 'performance', 20 );



/*---------------------------------------------------------
 *   For theme validator
 ---------------------------------------------------------*/

if ( ! isset( $content_width ) ) $content_width = 900;

/*---------------------------------------------------------
 * Paginate Archive Index Page Links
 ---------------------------------------------------------*/
function crumina_pagination() {
    global $wp_query;

    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5,
        'prev_next' => True,
        'prev_text' => __('Previous','crum'),
        'next_text' => __('Next','crum'),
        'type' => 'list'
    ) );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo '<div class="pagination">';
        echo $paginate_links;
        echo '</div><!--// end .pagination -->';
    }
}

add_theme_support( 'automatic-feed-links' );

//add_theme_support( 'buddypress' );

////////////////////////////////////////////////////////////////////////

update_option('layerslider-validated', '1');

update_option( 'crum_settings','1' );


add_filter( 'add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'woothemes' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count ); ?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;

}

function true_plugins_deactivate() {
	if ( $active_plugins = get_option('active_plugins') ) {
		$deactivate_this = array( // в массиве перечисляем плагины которые хотим деактивировать
			'instagram-plugin/crum-instagram.php',
			'crum-page-slider/crum-page-slider.php',
		);
		$active_plugins = array_diff( $active_plugins, $deactivate_this );
		update_option( 'active_plugins', $active_plugins );
	}
}

add_action( 'admin_init', 'true_plugins_deactivate', 20 );

function crum_z_index(){
	if (is_admin()){
		echo '<style type="text/css">';
		echo '.wp-dialog{z-index:99999 !important;}';
		echo '</style>';
	}
}


add_action ('admin_head', 'crum_z_index', 99);

?>