<?php if ($effects){
    $cr_effect = ' cr-animate-gen"  data-gen="'.$effects.'" data-gen-offset="bottom-in-view';
} else {
    $cr_effect ='';
}


$options = get_option('second-touch');


    $slug = 'my-product';


?>

<div class="module recent-block  <?php echo $cr_effect; ?>">
    <?php if ($main_title != ''): ?>
        <h3 class="widget-title">
            <?php echo $main_title ?>
        </h3>
    <?php endif; ?>

    <?php

    echo '<div class="block-news-feature">';
    $the_query = null;
    $sticky = get_option('sticky_posts');


    if ($categories){
        $args = array(
            'tax_query' => array(

                array(
                    'taxonomy' => 'my-product_category',
                    'field' => 'id',
                    'terms' => $categories
                )
            ),
            'post_type' => $slug,
            'posts_per_page' => $no_of_posts,
        );
    } else {
        $args = array(
            'post_type' => $slug,
            'posts_per_page' => $no_of_posts,
        );
    }

    $the_query = new WP_Query($args);
    echo '<div id="'. $unique_id .'" class="post-carousel-wrap"><ul class="post-carousel">';

    while ($the_query->have_posts()) : $the_query->the_post();

        $format = get_post_format();
        if (false === $format) {
            $format = 'standard';
        }

        $thumb = get_post_thumbnail_id();

        if (has_post_thumbnail()) {
            $img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
            $article_image = aq_resize($img_url, 390, 245, true);
        } else {
            $article_image = $no_image;
        } ?>

        <li class="post-carousel-item">

            <div class="item" style="background: url(<?php echo $article_image; ?>) center;">

                <span class="icon-format <?php echo $format ?>"><i class="linecon-"></i></span>

                <div class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

                <div class="text"><?php content(13); ?></div>

            </div>

        </li>

    <?php

    endwhile;
    wp_reset_postdata();

    echo '</ul></div>';
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function () {


            var news_row = jQuery('#<?php echo $unique_id ?>');
            var item_width = news_row.width() / 2;

            jQuery('#<?php echo $unique_id ?>').flexslider({
                selector: ".post-carousel > li",
                namespace: "post-carousel-",          //{NEW} String: Prefix string attached to the class of every element generated by the plugin
                animation: "slide",
                direction: "horizontal",
                itemWidth: item_width,           //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
                itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
                minItems: 1,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
                maxItems: 2,
                slideshow: false,
                controlsContainer: news_row.find(".extra-links"),
                controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav: true,           //Boolean: Create navigation for previous/next navigation? (true/false)
                prevText: "",                 //String: Set the text for the "previous" directionNav item
                nextText: ""
            });

        });
    </script>

</div>