<?php $options = get_option('second-touch'); ?>


    <div class="row">

        <div id="top-panel">

            <div class="login-header">
                <?php

                if (!is_user_logged_in()) {

                    echo '<div class="avatar"><i class="linecon-user"></i></div>';

                    echo '<div class="links">';

                    echo '<a href="#" class="drop-login" data-reveal-id="loginModal">' . __('Login site', 'crum') . '</a>';

                    if (get_option('users_can_register')) :

                        echo '<span class="delim"></span><a href="'.wp_registration_url().'">' . __('Register', 'crum') . '</a>';

                    endif;

                    echo '</div>';
                    ?>

                    <div id="loginModal" class="reveal-modal">
                        <?php  crum_login_form(get_bloginfo('url'));  ?>
                        <a class="close-reveal-modal">&#215;</a>
                    </div>

                <?php
                } else {
                    global $user_login;
                    get_currentuserinfo();
                    $current_user = wp_get_current_user(); ?>

                    <div class="top-avatar">
                        <?php if (($current_user instanceof WP_User)) {
                            echo get_avatar($current_user->user_email, 31);
                        } ?>
                    </div>

                    <div class="links">
                        <?php wp_loginout(); ?>
                    </div>


                <?php } ?>

            </div>
            <div class="top-info"><?php echo $options["top_adress_field"]; ?></div>
            <div class="search"><?php get_search_form(); ?></div>

            <?php if ($options["wpml_lang_show"]) { ?>
				<?php if (function_exists('icl_get_languages')):?>
<style >
.lang-sel1{padding-left:10px;}
img.lang{border: solid #B8B8B8 1px;} 
img.lang-active{border: solid #FFCC00 1px;}
img.lang:hover{border: solid #FFCC00 1px;}
</style>
                <div class="lang-sel1">
		<a href="https://play.google.com/store/apps/details?id=org.spromozhen.kozhenspromozhen" target="_blank"><img src="http://xn----itbbbcurgecebkon.org/wp-content/uploads/2017/11/google-play2.png" width="80px"/></a>
		<a href="https://itunes.apple.com/ru/app/kozhen-spromozhen/id1189941682" target="_blank"><img src="http://xn----itbbbcurgecebkon.org/wp-content/uploads/2017/11/app-store2.png" width="80px"/></a>
		</div>
                <div class="lang-sel">

<?php //echo ICL_LANGUAGE_CODE;?>
                        <?php
                        function language_selector_flags()
                        {
                            $languages = icl_get_languages('skip_missing=0&orderby=code&order=ASC');
// print_r($languages['language_code']);
                            if (!empty($languages)) {
                                foreach (array_reverse($languages) as $l) {
                                    echo '<a href="'  . $l['url'] . '">';
                                    echo '<img src="' . $l['country_flag_url'] . '" class="lang'.($l['language_code']==ICL_LANGUAGE_CODE?'-active':'').'"/>';
                                    echo '</a>';
                                }
                            }
                        }

                        language_selector_flags();

                        ?>
                </div>


			<?php endif;?>
            <?php } elseif (isset($options["lang_shortcode"])) { ?>

                <?php echo do_shortcode($options["lang_shortcode"]); ?>

            <?php }  ?>

				<?php
				if ( $options['top_panel_cart'] == '1' ) {
					reactor_minicart();
				}
				?>

            <!--<div class="head-soc-icons"><span><?php //_e('Follow us:', 'crum'); ?></span>-->

                <div class="soc-icons">
                    <?php crum_social_networks(true); ?>
                </div>
            </div>
        </div>
    </div>