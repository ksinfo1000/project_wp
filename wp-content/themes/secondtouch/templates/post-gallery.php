<?php $options = get_option('second-touch');
$image_crop = $options['thumb_image_crop'];
if ($image_crop == "") {$image_crop = true;}
?>


<?php
global $post;
    $args = array(
        'order' => 'ASC',
        'post_type' => 'attachment',
        'post_parent' => $post->ID,
        'post_mime_type' => 'image',
        'post_status' => null,
        'numberposts' => -1,
    );
    $attachments = get_posts($args);
    if ($attachments) {
        echo '<div class="slide-post">';

            foreach ($attachments as $attachment) {
                $img_url =  wp_get_attachment_url($attachment->ID); //get img URL

                if ($options['post_thumbnails_width'] !='' && $options['post_thumbnails_height'] !=''){
                    $article_image = aq_resize($img_url, $options['post_thumbnails_width'], $options['post_thumbnails_height'], $image_crop);
                } else {
                    $article_image = aq_resize($img_url, 900, 400, $image_crop);
                }

                ?>
                <div><a href="<?php echo $img_url; ?>" rel="prettyPhoto[pp_gal]">
                    <img src="<?php echo $article_image ?>" alt="<?php the_title(); ?>"/>
                </a></div>

            <?php  }
        echo '</div>';
    }
$postid = get_the_ID(); ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".post-<?php echo $postid; ?> .slide-post").orbit({
                fluid: true,
                advanceSpeed: 6000, 		 // if timer is enabled, time between transitions
                directionalNav: false
            });

        });

    </script>

