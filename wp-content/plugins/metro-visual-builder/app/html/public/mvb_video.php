<?php if ($effects){
    $cr_effect = ' cr-animate-gen"  data-gen="'.$effects.'" data-gen-offset="bottom-in-view';
} else {
    $cr_effect ='';
}
?>

<div class="video_module module <?php echo $css ?>">

    <?php if ($main_title != ''): ?>

        <h3 class="twelve columns widget-title">

            <?php echo $main_title ?>

        </h3>


    <?php endif; ?>

    <?php if ($content){


        $embed_code = wp_oembed_get($content, array('width'=>1200));

        echo '<div class="video-box">'.$embed_code.'</div>';

} ?>


</div>
