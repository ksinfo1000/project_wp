<?php $options = get_option('second-touch');

global $post;
$custom_head_img = get_post_meta( $post->ID, 'crum_headers_bg_img', true );
$custom_head_color = get_post_meta( $post->ID, 'crum_headers_bg_color', true );
$custom_head_subtitle = get_post_meta($post->ID, 'crum_headers_subtitle', true);


if ($options['stan_header']) {echo '<div id="stuning-header" style="';
    if ($custom_head_color && ($custom_head_color !='#ffffff')&&($custom_head_color !='#')) { echo ' background-color: '.$custom_head_color.'; ';}
    elseif
    ($options['stan_header_color']) { echo ' background-color: '.$options['stan_header_color'].'; ';}
    if ($custom_head_img) { echo 'background-image: url('.$custom_head_img.');  background-position:  center;';}
    elseif
    ($options['stan_header_image']) { echo 'background-image: url('.$options['stan_header_image'].'); background-position:  center; ';}

    if($options['stan_header_fixed']) { echo 'background-attachment: fixed; background-position:  center -10%;';}

    echo '">';
} ?>


<div class="row">
    <div class="twelve columns">
        <div id="page-title">
            <div class="page-title-inner">
                <h1 class="page-title">
                    <?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

                    $page = $options['portfolio_page_select'];

					if ( class_exists('WPML_String_Translation') ) {
						$page = icl_object_id( $post->ID, 'post', false, ICL_LANGUAGE_CODE );
					}

					$title = get_the_title($page);

                    $slug = get_permalink($page);

                    echo $title;

                    ?>
                </h1>

                <div class="subtitle">
                    <?php
                    if ($custom_head_subtitle == '') { $custom_head_subtitle = get_post_meta($page, 'crum_headers_subtitle', true);}
                    if ($custom_head_subtitle) {
                        echo $custom_head_subtitle;
                    } else {
                        //bloginfo( 'description' );
switch (ICL_LANGUAGE_CODE) {
    case "uk":
        echo "Разом змінимо життя на краще";
        break;
    case "ru":
        echo "Вместе изменим жизнь к лучшему";
        break;
    case "en":
        echo "Together build a better life";
        break;
}
                    } ?>

                </div>

                <?php if (!$options['disable_breadcrumbs']) { ?>
                    <div class="breadcrumbs">
                        <nav id="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title"  href="<?php echo home_url(); ?>/"><?php _e('Home', 'crum') ?></a></span> <span class="del">·</span> <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="<?php echo $slug; ?>"><?php echo $title; ?></a></span> <span class="del">·</span> <?php the_title(); ?></nav>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>
<?php if ($options['stan_header']) {echo '</div>';} ?>
<?php do_action('crum_after_stan_header'); ?>