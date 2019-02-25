<?php if ($effects){
    $cr_effect = ' cr-animate-gen"  data-gen="'.$effects.'" data-gen-offset="bottom-in-view';
} else {
    $cr_effect ='';
} ?>

<div class="to-action-block row  <?php echo $css ?> <?php echo $cr_effect; ?>">

    <?php if ($link_url != '' AND $button_text != ''){
        echo '<div class="nine columns text-holder">';
    } else {
        echo '<div class="twelve columns text-holder">';
    } ?>

    <?php if ($description): ?>
        <div class="block-description">
            <?php echo mvb_parse_content($description, TRUE) ?>
        </div>
    <?php endif; ?>

    <?php if ($content): ?>
        <div class="block-title">
            <?php echo mvb_parse_content($content, TRUE) ?>
        </div>
    <?php endif; ?>

    <?php echo '</div>'; ?>

    <?php if ($link_url != '' AND $button_text != ''): ?>
        <div class="three columns button-holder">
            <a href="<?php echo $link_url ?>" class="button button-icon right"

                <?php if ($new_tab): ?> target="_blank"<?php endif; ?>>

                <?php if ($icon): ?><span class="icon <?php echo $icon; ?>"></span><?php endif; ?>
                <?php echo $button_text ?>

            </a>
        </div>
    <?php endif; ?>

</div>