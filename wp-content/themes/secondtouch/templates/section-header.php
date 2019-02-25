<?php $options = get_option('second-touch'); ?>

<?php
if($options['fixed_menu_show'] == '1'){
	$fixed = 'fixed';
}else{
	$fixed = '';
}
?>

<section id="header" class="horizontal" data-not-fixed="<?php echo $fixed;?>">

    <div class="header-wrap">
        <div class="row">

            <div class="twelve columns">

                <?php if ($options['custom_logo_image']) {  ?> 
                    <div id="logo">
    			<?php $lang = ICL_LANGUAGE_CODE;?>
<?php if ($lang=='en'):?>
    			<a href="<?php echo home_url(); ?>/"><img src="/wp-content/uploads/2016/08/logo_en.jpg" alt="<?php bloginfo('name'); ?>"></a>
<?php else: ?>
    			<a href="<?php echo home_url(); ?>/"><img src="/wp-content/uploads/2014/02/logo_<?php echo $lang;?>.png" alt="<?php bloginfo('name'); ?>"></a>
<?php endif; ?>
			<a href="<?php echo home_url(); ?>/"><img class="for-panel" src="/wp-content/uploads/2014/02/logo_<?php echo $lang;?>.png"></a>
                    </div>
					<a href="#" class="top-menu-button "></a>
                    <?php
                }

                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'tiled-menu', 'fallback_cb' => 'top_menu_fallback')); ?>
<?php echo  (is_front_page() ? do_shortcode( '[hmp_player]' ) : '' ); ?>
            </div>
        </div>
    </div>
</section>
<section id="before-content-block">

	<?php crum_shortcode_before();?>

</section>