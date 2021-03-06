<?php if ($effects){
    $cr_effect = ' cr-animate-gen"  data-gen="'.$effects.'" data-gen-offset="bottom-in-view';
} else {
    $cr_effect ='';
} ?>

<div class="accodion_module module <?php echo $css . $cr_effect ?>">


    <?php if ($main_title != ''): ?>

        <h3 class="widget-title">

            <?php echo $main_title ?>

        </h3>

    <?php endif; ?>


    <ul class="accordion">

        <?php $i = 1; ?>

        <?php foreach ($r_items as $item): ?>
            <li <?php if ($i == '1') {
                echo 'class="active"';
            } ?>>
                <div class="title">
                    <span class="tab-title">
                        <?php echo $item['panel_title'] ?>
                    </span>
                    <span class="icon"><i class="<?php echo $item['icon']; ?>"></i></span>

                </div>
                <div class="content">
                    <?php echo mvb_parse_content_html($item['content'], TRUE) ?>
                </div>
            </li>

            <?php $i++; ?>
        <?php endforeach; ?>

    </ul>

</div>