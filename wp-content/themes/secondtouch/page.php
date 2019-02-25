<?php crum_header();?>
<?php

get_template_part('templates/top', 'page'); ?>
<?php $options = get_option('second-touch');?>
<section id="layout">
    <div class="row">

        <?php
        set_layout('pages');

        get_template_part('templates/content', 'page');


			if ($options['page_comments_display'] == '1'){
				comments_template();
			}


        set_layout('pages', false);

        ?>
    </div>
</section>
<?php crum_footer();?>