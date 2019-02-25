<?php crum_header();?>
<?php $options = get_option('second-touch'); ?>

<?php global $data;
$is_full = ($options["portfolio_single_style"] == 'full');

get_template_part('templates/top', 'folio'); ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slider-master/js/jssor.core.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slider-master/js/jssor.utils.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slider-master/js/jssor.slider.js"></script>


    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 720));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>




    <section id="layout" class="single-folio">

        <div class="row project">

            <h1 class="portfolio-item-title twelve columns"><?php the_title(); ?></h1>

            <div class="<?php echo ($is_full) ? 'twelve' : 'eight'; ?> columns">

                <?php

                if (!post_password_required(get_the_id())) {


                $embed_url = get_post_meta($post->ID, 'folio_embed', true);

                if ($embed_url):

                    $embed_code = wp_oembed_get($embed_url);

                    echo '<div class="single-folio-video">' . $embed_code . '</div>';

                endif;

                if ((get_post_meta($post->ID, 'folio_self_hosted_mp4', true) != '') || (get_post_meta($post->ID, 'folio_self_hosted_webm', true) != '')) {

                    if (has_post_thumbnail()) {
                        $thumb = get_post_thumbnail_id();
                        $img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
                        $article_image = aq_resize($img_url, 800, 600, true); ?>

                    <?php } ?>

                    <link href="https://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
                    <script src="https://vjs.zencdn.net/c/video.js"></script>


                    <video id="video-post<?php the_ID(); ?>" class="video-js vjs-default-skin" controls
                           preload="auto"
                           width="800"
                           height="600"
                           poster="<?php echo $article_image ?>"
                           data-setup="{}">


                        <?php if (get_post_meta($post->ID, 'folio_self_hosted_mp4', true)): ?>
                            <source src="<?php echo get_post_meta($post->ID, 'folio_self_hosted_mp4', true) ?>" type='video/mp4'>
                        <?php endif; ?>
                        <?php if (get_post_meta($post->ID, 'folio_self_hosted_webm"', true)): ?>
                            <source src="<?php echo get_post_meta($post->ID, 'folio_self_hosted_webm"', true) ?>" type='video/webm'>
                        <?php endif; ?>
                    </video>


                <?php
                } ?>

                <?php
                if (metadata_exists('post', $post->ID, '_my_product_image_gallery')) {
                    $my_product_image_gallery = get_post_meta($post->ID, '_my_product_image_gallery', true);
                } else {
                    // Backwards compat
                    $attachment_ids = get_posts('post_parent=' . $post->ID . '&numberposts=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids');
                    $attachment_ids = array_diff($attachment_ids, array(get_post_thumbnail_id()));
                    $my_product_image_gallery = implode(',', $attachment_ids);
                }

                $attachments = array_filter(explode(',', $my_product_image_gallery));

                if ($attachments) {
?>



    <div id="slider1_container" style="position: relative; width: 720px;
        height: 480px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo get_template_directory_uri();?>/slider-master/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
            overflow: hidden;">

<?php
                    foreach ($attachments as $attachment_id) {
                        $image_attributes = wp_get_attachment_image_src($attachment_id); // returns an array
                        $thumb_image = aq_resize($image_attributes[0], 97, 64, true);
                        $image_attributes1 = wp_get_attachment_image_src($attachment_id, 'large'); // returns an array
                        $image_attributes2 = aq_resize($image_attributes1[0], 720, 480, true);
		

			    echo '<div>'.'<img u="thumb" src="'.$thumb_image.'" />'.
				    '<img u="image" src="'.$image_attributes2.'" /></div>';

		    }
		      ?>
        </div>
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 720px; height: 100px; left: 0px; bottom: 0px; overflow: hidden; ">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 07 css */
                /*
                .jssort07 .p            (normal)
                .jssort07 .p:hover      (normal mouseover)
                .jssort07 .pav          (active)
                .jssort07 .pav:hover    (active mouseover)
                .jssort07 .pdn          (mousedown)
                */
                .jssort07 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    filter: alpha(opacity=60);
                    opacity: .6;
                    background-color: #fff;			     
                }

                .jssort07 .p:hover .i, .jssort07 .pav .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort07 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    border: 1px solid #000;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                * html .jssort07 .o {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }

                .jssort07 .pav .o, .jssort07 .p:hover .o {
                    border-color: #fff;
                }

                .jssort07 .pav:hover .o {
                    border-color: #0099FF;
                }

                .jssort07 .p:hover .o {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                    <thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
                    <div class="o">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <!-- Arrow Navigator Skin Begin -->
            <style>
                    /* jssor slider arrow navigator skin 11 css */
                    /*
                .jssora11l              (normal)
                .jssora11r              (normal)
                .jssora11l:hover        (normal mouseover)
                .jssora11r:hover        (normal mouseover)
                .jssora11ldn            (mousedown)
                .jssora11rdn            (mousedown)
                */
                    .jssora11l, .jssora11r, .jssora11ldn, .jssora11rdn {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(<?php echo get_template_directory_uri();?>/slider-master/img/a11.png) no-repeat;
                        overflow: hidden;
                    }

                    .jssora11l {
                        background-position: -11px -41px;
                    }

                    .jssora11r {
                        background-position: -71px -41px;
                    }

                    .jssora11l:hover {
                        background-position: -131px -41px;
                    }

                    .jssora11r:hover {
                        background-position: -191px -41px;
                    }

                    .jssora11ldn {
                        background-position: -251px -41px;
                    }

                    .jssora11rdn {
                        background-position: -311px -41px;
                    }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->



	<?php			

                } elseif (has_post_thumbnail() && (!$embed_url)) {

                    $thumb = get_post_thumbnail_id();
                    echo wp_get_attachment_image($thumb, 'full');
                }
                ?>

                <div class="pages-nav twelve columns ">

                    <?php previous_post_link('<div class="prev-link"><span class="text">'.__('Prev','crum').'.</span> %link </div>', '%title'); ?>

                    <?php $page = $options['portfolio_page_select']; $slug = get_permalink($page); if($page) {echo '<a class="to-folio" href="'.$slug.'"></a>';} ?>

                    <?php next_post_link('<div class="next-link"><span class="text">'.__('Next','crum').'</span> %link </div>', '%title'); ?>

                </div>

            </div>

            <div class="folio-info <?php echo $is_full ? 'twelve' : 'four'; ?> columns">

                <dl class="tabs contained horisontal clearfix">

                    <dd class="active"><a href="#folio-desc-1"><?php _e('Description', 'crum') ?></a></dd>

                    <?php
                    if (function_exists('get_field_objects')) {
                        $fields = get_field_objects();
                    } else {
                        $fields = false;
                    }
                    if ($fields) {
                        $i = 2;
                        foreach ($fields as $field_name => $field) {
                            if ($field['label']) {
                                echo '<dd><a href="#folio-desc-' . $i . '">';
                                echo __($field['label'],'crum');
//savchuk                       echo $field['label'];
                                echo '</a></dd>';

                                $i++;
                            }
                        }
                    } ?>

                </dl>
                <ul class="tabs-content contained">
                    <li id="folio-desc-1Tab" class="active">

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>

                    </li>

                    <?php if ($fields) {
                        $i = 2;
                        foreach ($fields as $field_name => $field) {
                            if ($field['label']) {
                                echo '<li id="folio-desc-' . $i . 'Tab">';
                                echo do_shortcode($field['value']);
                                echo '</li>';

                                $i++;
                            }
                        }
                    } ?>
                </ul>


                <?php get_template_part('templates/folio', 'single-terms'); ?></span>

                <?php if ($options["post_share_button"]) {

                    global $post;
                    $url = get_permalink($post->ID);

                    ?>

                    <div id="social-share" data-directory="<?php echo get_template_directory_uri(); ?>">

                        <?php echo getPostLikeLink(get_the_ID()); ?>

                        <span id="cr-facebook-share" data-url="<?php echo $url ?>" data-text="<?php the_title(); ?>" data-title="share"></span>
                        <span id="cr-twitter-share" data-url="<?php echo $url ?>" data-text="<?php the_title(); ?>" data-title="share"></span>
                        <span id="cr-googlep-share" data-url="<?php echo $url ?>" data-text="<?php the_title(); ?>" data-title="share"></span>
                        <span id="cr-pinterest-share" data-url="<?php echo $url ?>" data-text="<?php the_title(); ?>" data-title="share"></span>
                    </div>

                <?php } ?>

            </div>


            <?php echo '</div>'; ?>

            <?php
            } else the_content();


            if ($options["recent_items_disp"]) {
                ?>

                <div class="row">
                    <div class="twelve columns">

                        <?php echo do_shortcode($options['block_single_folio_item']); ?>

                    </div>
                </div>

            <?php } ?>


    </section>
<?php crum_footer();?>
