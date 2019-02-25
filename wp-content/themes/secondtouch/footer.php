<?php $options = get_option('second-touch'); ?>

<?php if (is_active_sidebar('sidebar-footer-col1') || is_active_sidebar('sidebar-footer-col2') || is_active_sidebar('sidebar-footer-col3')) { ?>
<section id="footer">

    <div class="row">
        <div class="four columns">

            <?php dynamic_sidebar('sidebar-footer-col1');?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('sidebar-footer-col2');?>
        </div>
        <div class="four columns">

            <?php dynamic_sidebar('sidebar-footer-col3');?>

            <div class="soc-icons">

                <?php if ((isset($options["footer_soc_networks"])) && ($options["footer_soc_networks"] != '') && ($options["footer_soc_networks"] != false)): crum_social_networks(false); endif;?>
<h3 class="widget-title"><?php _e('Subscribe', 'subscribe2')?>:</h3>
<?php echo do_shortcode( '[subscribe2]' ); ?>
            </div>

        </div>
    </div>

</section>
<?php } ?>
<section id="sub-footer">
    <div class="row">

        <div class="six columns copyr">

            <?php if (isset($options["logo_footer"]) && ($options["logo_footer"])) : ?> <img src = "<?php echo $options["logo_footer"]; ?>" alt="logo" class="foot-logo" /> <?php endif; ?>

            <?php echo $options["copyright_footer"]; ?>

        </div>

        <div class="six columns">

            <?php //wp_nav_menu(array('theme_location' => 'footer_menu', 'container' => 'nav', 'fallback_cb' => 'false', 'menu_class' => 'footer-menu', 'walker' => new crum_clean_walker())); ?>

        </div>
    </div>
</section>
<a href="#" id="linkTop" class="backtotop hidden"></a>
<?php
if( isset($options["custom_js"])) {
echo $options["custom_js"];
}
wp_footer();?>

</body>
</html>