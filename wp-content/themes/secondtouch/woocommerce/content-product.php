<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if (empty($woocommerce_loop['loop']))
    $woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if (empty($woocommerce_loop['columns']))
    $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 3);

// Ensure visibility
if (!$product->is_visible())
    return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
    $classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
    $classes[] = 'last';

if($woocommerce_loop['columns'] == '4'){
    $classes[] = 'three mobile-two columns';
} elseif ($woocommerce_loop['columns'] == '3'){
    $classes[] = 'four mobile-two columns';
} else {
    $classes[] = 'four mobile-two columns';
}


$categ = $product->get_categories();
$term = get_term_by('name', strip_tags($categ), 'product_cat');

?>
<li <?php post_class($classes); ?>>
    <span class="prod-wrap">

    <?php do_action('woocommerce_before_shop_loop_item'); ?>


        <span class="prod-image-wrap entry-thumb">

		<?php
        /**
         * woocommerce_before_shop_loop_item_title hook
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */

        do_action('woocommerce_before_shop_loop_item_title');
        ?>
            <a href="<?php the_permalink(); ?>" class="link"></a>
        </span>


    <h3><?php the_title(); ?></h3>

        <?php if ($term) {
            echo '<span class="prod-cat">' . $term->name . '</span>';
        }
        /**
         * woocommerce_after_shop_loop_item_title hook
         *
         * @hooked woocommerce_template_loop_price - 10
         */
        do_action('woocommerce_after_shop_loop_item_title');
        ?>

        <span class="add-info">
    <a class="prod-details" href="<?php the_permalink(); ?>"><i class="linecon-eye"></i> <?php _e('Details', 'crum'); ?>
    </a>
            <?php do_action('woocommerce_after_shop_loop_item'); ?>
    </span>

    </span>
</li>