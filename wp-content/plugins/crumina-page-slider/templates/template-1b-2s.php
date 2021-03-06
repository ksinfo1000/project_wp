<?php
/**
 * @package   Crumina page slider
 * @author    Liondekam <liondekam@gmail.com>
 * @license   GPL-2.0+
 * @link      http://crumina.net
 * @copyright 2013 Crumina Team
 */


//elements options

$cache_time = $slider['cache'];

$enable_title = $slider['enable']['title'];
$enable_icon = $slider['enable']['icon'];
$enable_category = $slider['enable']['category'];
$enable_description = $slider['enable']['description'];
$enable_link = $slider['enable']['link'];

$limit_words = $slider['words_limit'];

$category_bg_color = $slider ['category_background_color'];
$slide_hover_color = $slider['slide_hover_color'];
$odd_slide_hover_color = $slider ['odd_slide_hover_color'];
$slide_hover_opacity = $slider['opacity'];
//slideshow options

if ( isset($slider['auto_mode']) && $slider['auto_mode'] ) {
	$auto_scroll = $slider['auto_mode'];
}
if ( isset($slider['timeout']) && $slider['timeout'] ) {
	$auto_timeout = $slider['timeout'];
}

//Posts and categories

$count = 1;
$box_counter = 1;
$large_count = 1;
$odd_class='';

$crum_loop_output = get_transient( 'crumina_loopOutput_'.$slider_id );

if ( empty( $crum_loop_output ) ){

    $query = get_transient( 'crumina_page_slider_cache_'.$slider_id );

ob_start();



   
?>



<?php while ($query->have_posts()) : $query->the_post();

    if ($count % 2) {
        $odd_class = 'odd';
    } else {
        $odd_class = 'even';
    }
		if ($count % 3 == 0) {
			$last_class = 'last-item';
		} else {
			$last_class = '';
		}


    if ($count == 1) {
        echo '<li>';
    } elseif ($count % 6 == 1) {
        echo '</li><li>';
        $box_counter ++;
    }

    if (has_post_thumbnail()) {
        $thumb = get_post_thumbnail_id();
        $img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
        $img_url = $this->theme_thumb($img_url, 587, 240);
    } else {
        $img_url = $page_slider_folder . 'assets/no-image/large.png';
    }

    if ($enable_description) {
        $content = get_the_excerpt();
        $trimmed_content = wp_trim_words(strip_shortcodes($content), $limit_words, '');

    }

    if ($enable_icon):

        $post_type = get_post_type();

        if ($post_type == 'portfolio'){

            $format_icon = 'slider-photo';

        }

        elseif ($post_type == 'product') {

            $format_icon = 'slider-wallet';

        }

        elseif ($post_type == 'post'){

            $post_format = get_post_format();

            if ($post_format = 'gallery' or $post_format = 'image'){

                $format_icon = 'slider-photo';

            }
        }

        else ($format_icon = 'slider-news');
        endif;


    if ($enable_category) {


        $post_type = get_post_type();

        $custom_args = array(
                'public' => true,
                '_builtin' => false
        );
        $output = 'names';
        $operator = 'and';

        $product_link_counter = 0;

            $custom_post_types = get_post_types ($custom_args, $output, $operator);
                foreach ($custom_post_types as $custom_post_type) {
                    if (! ($custom_post_type == 'product_variation' or $custom_post_type == 'shop_coupon' or $custom_post_type == 'pricing-table')){
                        $custom_taxonomy = get_object_taxonomies ($custom_post_type);
                            foreach ($custom_taxonomy as $tax){
                                if (! ($tax == 'product_shipping_class')){

                                    $args = array(
                                        'orderby' => 'name',
                                        'show_count' => 0,
                                        'pad_counts' => 0,
                                        'hierarchical' => 1,
                                        'taxonomy' => $tax,
                                        'title_li' => ''
                                    );
                                    $list_categories = get_categories( $args );

                                    foreach($list_categories as $list){
                                        if(!($list->taxonomy=="product_tag")){
                                            $terms = get_the_terms (get_the_ID(), $tax);
                                            if ($terms && ! is_wp_error ($terms)):
                                                $category_links = array();
                                                foreach ($terms as $term){
                                                    $category_links[] = $term -> name;
                                                }
                                                foreach ($category_links as $category_link){
                                                  $product_link[$product_link_counter] = get_term_link ($category_link, $tax);
                                                  $product_link_counter ++;
                                                }

                                            endif;
                                        }
                                    }

                                }
                            }

                    }
                }
    }


    if ((( ($count %3 == 0) || ($count %4 == 0)) && ($count %6 != 0) && ($box_counter %2 == 1)) ||
        (( ($count %3 == 1) || ($count %4 == 1)) && ($count %6 != 1) && ($box_counter %2 == 0))) {

        if ($large_count %2 == 0) {
            $clear = ' cr-sl-clear ';
        } else {
            $clear = '';
        }

        echo '<div class="large-element item '.$last_class.' '.$odd_class.' '. $clear .'">';
        echo '<div class="sl-thumb-wrap"><img src="' . $img_url . '" '. $height_fix .' alt=""></div>';

         ?>


    <?php
        $large_count ++;
    } else {

        if ($enable_description) {
            $content = get_the_excerpt();
            $trimmed_content = wp_trim_words(strip_shortcodes($content), ($limit_words/2), '');
        }

		$height_fix = '';
		if (has_post_thumbnail()) {
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
			$img_url = $this->theme_thumb($img_url, 292, 240);
		} else {
			$img_url = $page_slider_folder .'assets/no-image/square.png';
			$height_fix = ' style="margin-bottom:1px;" ';
		}

        echo '<div class="small-element item '.$odd_class.'">';

        echo '<div class="sl-thumb-wrap"><img src="' . $img_url . '" '. $height_fix .' alt=""></div>';



    }
    if ($enable_category){
        if ($post_type == 'post'){
            $category = get_the_category();
            echo '<div class="cat-name" >';
            foreach ($category as $categ){
                echo '<a href="' . esc_url( get_category_link($categ->term_id)). '" >' . $categ->cat_name. '</a> &nbsp;';
            }
            echo '</div>';
        }

        elseif (!($post_type == 'page')) {
            echo '<div class ="cat-name" >';
            $category_link_counter = 0;
            if (is_array($category_links)){
                foreach ($category_links as $cat_link){
                    echo '<a href="'.esc_url($product_link[$category_link_counter]).'">' .$cat_link.'</a> &nbsp;';
                    $category_link_counter++;
                }
            }
            echo '</div>';
        }
    } ?>


    <div class="item-content-metro">

        <?php if ($enable_icon): ?>
            <span class="slider-icon-wrap"><i class="slider-icon <?php echo $format_icon ?>"></i></span>
        <?php endif; ?>


        <?php if ($enable_title): ?>
            <div class="entry-title">
                <?php if ($enable_link) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php
                } else {
                    the_title();
                } ?>
            </div>
        <?php endif; ?>
        <?php if ($enable_description): ?>
            <div class="text" ><?php echo $trimmed_content; ?></div>
        <?php endif; ?>

		<?php if ($enable_link) { ?>
			<a class="mobile-link" href="<?php the_permalink(); ?>"></a>
		<?php } ?>

    </div>


    <?php  echo '</div>';


    /*if ($count % 6 == 0) {
        echo '</li>';
    }*/

    $count++;
endwhile;

$crum_loop_output = ob_get_contents();

ob_end_clean();

set_transient('crumina_loopOutput_'.$slider_id, $crum_loop_output, $cache_time*60);

}

echo $crum_loop_output;