<?php
/*
 *
 * Set the text domain for the theme or plugin.
 *
 */
define('Redux_TEXT_DOMAIN', 'crum');

/*
 *
 * Require the framework class before doing anything else, so we can use the defined URLs and directories.
 * If you are running on Windows you may have URL problems which can be fixed by defining the framework url first.
 *
 */
//define('Redux_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('Redux_Options')) {
    require_once(dirname(__FILE__) . '/options/defaults.php');
}

/*
 *
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 *
 * NOTE: the defined constansts for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 *
 */
/*
function add_another_section($sections) {
    //$sections = array();
    $sections[] = array(
        'title' => __('A Section added by hook', 'crum'),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'crum'),
		'icon' => 'paper-clip',
		'icon_class' => 'awesome-large',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}
//add_filter('redux-opts-sections-twenty_eleven', 'add_another_section');
*/



/*
 * 
 * Custom function for filtering the args array given by a theme, good for child themes to override or add to the args array.
 *
 */
/*
function change_framework_args($args) {
    $args['dev_mode'] = true;
    
    return $args;
}
//add_filter('redux-opts-args-twenty_eleven', 'change_framework_args');


/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function setup_framework_options() {
    $args = array();

    // Setting dev mode to true allows you to view the class settings/info in the panel.
    // Default: true
    $args['dev_mode'] = false;

	// Set the icon for the dev mode tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	$args['icon_type'] = 'iconfont';
	// Default: info-sign
	//$args['dev_mode_icon'] = 'info-sign';

	// Set the class for the dev mode tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

    // If you want to use Google Webfonts, you MUST define the api key.
    //$args['google_api_key'] = 'xxxx';

    // Define the starting tab for the option panel.
    // Default: '0';
    //$args['last_tab'] = '0';

    // Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
    // If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
    // If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
    // Default: 'standard'
    //$args['admin_stylesheet'] = 'standard';

    // Add HTML before the form.
    /*
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'crum');

    // Add content after the form.
    $args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'crum');

    // Set footer/credit line.
    //$args['footer_credit'] = __('<p>This text is displayed in the options panel footer across from the WordPress version (where it normally says \'Thank you for creating with WordPress\'). This field accepts all HTML.</p>', 'crum');

    // Setup custom links in the footer for share icons
    $args['share_icons']['twitter'] = array(
        'link' => 'http://twitter.com/ghost1227',
        'title' => __('Follow me on Twitter', 'crum'),
        'img' => Redux_OPTIONS_URL . 'img/social/Twitter.png'
    );
    $args['share_icons']['linked_in'] = array(
        'link' => 'http://www.linkedin.com/profile/view?id=52559281',
        'title' => __('Find me on LinkedIn', 'crum'),
        'img' => Redux_OPTIONS_URL . 'img/social/LinkedIn.png'
    );
*/
    // Enable the import/export feature.
    // Default: true
    $args['show_import_export'] = true;

	// Set the icon for the import/export tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	$args['import_icon_type'] = 'iconfont';
	// Default: refresh
	$args['import_icon'] = 'refresh';

	// Set the class for the import/export tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';

    // Set a custom option name. Don't forget to replace spaces with underscores!
    $args['opt_name'] = 'second-touch';

    // Set a custom menu icon.
    //$args['menu_icon'] = '';

    // Set a custom title for the options page.
    // Default: Options
    $args['menu_title'] = __('Options', 'crum');

    // Set a custom page title for the options page.
    // Default: Options
    $args['page_title'] = __('Options', 'crum');

    // Set a custom page slug for options page (wp-admin/themes.php?page=***).
    // Default: redux_options
    $args['page_slug'] = 'redux_options';

    // Set a custom page capability.
    // Default: manage_options
    //$args['page_cap'] = 'manage_options';

    // Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
    // Default: menu
    //$args['page_type'] = 'submenu';

    // Set the parent menu.
    // Default: themes.php
    // A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    //$args['page_parent'] = 'options-general.php';

    // Set a custom page location. This allows you to place your menu where you want in the menu order.
    // Must be unique or it will override other items!
    // Default: null
    //$args['page_position'] = null;

    // Set a custom page icon class (used to override the page icon next to heading)
    //$args['page_icon'] = 'icon-themes';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';
	//$args['dev_mode_icon_type'] = 'image';
	//$args['import_icon_type'] == 'image';

    // Disable the panel sections showing as submenu items.
    // Default: true
    //$args['allow_sub_menu'] = false;

    $assets_folder = get_template_directory_uri() .'/assets/';
        
    // Set ANY custom page help tabs, displayed using the new help tab API. Tabs are shown in order of definition.
   /* $args['help_tabs'][] = array(
        'id' => 'redux-opts-1',
        'title' => __('Theme Information 1', 'crum'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'crum')
    );
    $args['help_tabs'][] = array(
        'id' => 'redux-opts-2',
        'title' => __('Theme Information 2', 'crum'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'crum')
    );

    // Set the help sidebar for the options page.                                        
    $args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'crum');
*/
    $sections = array();

    $sections[] = array(
		// Redux uses the Font Awesome iconfont to supply its default icons.
		// If $args['icon_type'] = 'iconfont', this should be the icon name minus 'icon-'.
		// If $args['icon_type'] = 'image', this should be the path to the icon.
		// Icons can also be overridden on a section-by-section basis by defining 'icon_type' => 'image'
		'icon_type' => 'image',
		'icon' => Redux_OPTIONS_URL . 'img/home.png',
		// Set the class for this icon.
		// This field is ignored unless $args['icon_type'] = 'iconfont'
		'icon_class' => 'icon-large',
        'title' => __('Getting Started', 'crum'),
		'desc' => __('<p class="description">This is the description field for this section. HTML is allowed</p>', 'crum'),
		'fields' => array(
			array(
				'id' => 'font_awesome_info',
				'type' => 'raw_html',
				'html' => '<h3 style="text-align: center; border-bottom: none;">Welcome to the Options panel of the Second Touch theme!</h3>
<h4 style="text-align: center; font-size: 1.3em;">What does this mean to you?</h4>
	<p> From here on you will be able to regulate the main options of all the elements of the theme. </p>
    <p>Theme documentation you will find in the archive with the theme I the "Documentation" folder. </p>
    <p>If you have some questions on the theme, you can send them to our PM on <a href="http://themeforest.net/user/Crumina ">Themeforest.net</a>, you can send us email directly to <a href="mailto:info@crumina.net">info@crumina.net</a>, or you can post your questions on our <a href="http://support.crumina.net">Support Forum</a>.</p>'
			)
		)
    );
    $sections[] = array(
        'title' => __('Main Options', 'crum'),
        'desc' => __('<p class="description">Main options of site</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'globe',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(

            array(
                'id' => 'scroll_animation',
                'type' => 'button_set',
                'title' => __('Page scroll animation', 'crum'),
                'desc' => __('Enable or disable page scroll animation', 'crum'),
                'options' => array('on' => 'On', 'off' => 'Off'),
                'std' => 'on'
            ),

            array(
                'id' => 'custom_favicon',
                'type' => 'upload',
                'title' => __('Favicon', 'crum'),
                'desc' => __('Select a 16px X 16px image from the file location on your computer and upload it as a favicon of your site', 'crum')
            ),
            array(
                'id' => 'custom_logo_image',
                'type' => 'upload',
                'title' => __('Header Logotype image', 'crum'),
                'desc' => __('Select an image from the file location on your computer and upload it as a header logotype', 'crum'),
                'std'  => $assets_folder.'img/logo.png',
            ),

            array(
                'id' => 'top_adress_block',
                'type' => 'button_set',
                'title' => __('Top block with address', 'crum'),
                
                'desc' => __('Enable or disable address block', 'crum'),
                'options' => array('1' => 'On', '0' => 'Off'),
                'std' => '1'
            ),

            array(
                'id' => 'disable_breadcrumbs',
                'type' => 'button_set',
                'title' => __('Breadcrumbs on page title panel', 'crum'),

                'desc' => __('Enable or disable breadcrumbs block', 'crum'),
                'options' => array('0' => 'On', '1' => 'Off'),
                'std' => '0'
            ),
            array(
                'id' => 'custom_portfolio-slug',
                'type' => 'text',
                'title' => __('Custom slug for portfolio items', 'crum'),
                'sub_desc' => __('<p>After change please go to <a href="options-permalink.php">Settings -> Permalinks</a> and press "Save changes" button to Save New permalinks</p>', 'crum'),
                'desc' => __('<p>Please write on latin without spaces</p>', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'top_adress_field',
                'type' => 'textarea',
                'title' => __('Top adress panel', 'crum'),
                'sub_desc' => __('Please do not use single qoute here', 'crum'),
                'desc' => __('This is top adress info block.', 'crum'),
                'validate' => 'html',
                'std' => '+38 032 900 34 45 <span class="delim"></span> Mon. - Fri. 10:00 - 21:00'
            ),
			array(
				'id' => 'top_panel_cart',
				'type' =>'button_set',
				'title' => __('Woocommerce cart in top panel', 'crum'),
				'desc' => __('If "On" woocommerce card will be displayed in top panel (If Woocommerce is enabled)', 'crum'),
				'options' => array('1' => 'On', '0' => 'Off'),
				'std' => '0'
			),
            array(
                'id' => 'responsive_mode',
                'type' => 'button_set',
                'title' => __('Responsive CSS', 'crum'),
                'desc' => __('Enable or disable site responsive design', 'crum'),
                'options' => array('off' => 'Off', 'on' => 'On'),
                'std' => 'on'
            ),
            array(
                'id' => 'lang_shortcode',
                'type' => 'text',
                'title' => __('Language selection shortcode', 'crum'),
                
                'desc' => __('You can type shortcode of language select tht your translating plugin provide', 'crum'),
                'std'  => '<div class="lang-sel"><a href="#"><img src="'.$assets_folder.'/img/lang-icon.png" alt="GB"><strong>Change your language:</strong>English</a><ul><li><a href="#">English</a></li><li><a href="#">Russian</a></li><li><a href="#">French</a></li></ul></div>',
            ),

            array(
                'id' => 'wpml_lang_show',
                'type' => 'button_set',
                'title' => __('WPML language switcher', 'crum'),
                
                'desc' => __('WPML plugin must be installed. It is not packed with theme. You can find it here: http://wpml.org/', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'
            ),
            array(
                'id' => 'custom_js',
                'type' => 'textarea',
                'title' => __('Custom JS', 'crum'),
                
                'desc' => __('Generate your tracking code at Google Analytics Service and insert it here.', 'crum'),
            ),
            array(
                'id' => 'custom_css',
                'type' => 'textarea',
                'title' => __('Custom CSS', 'crum'),
                
                'desc' => __('You may add any other styles for your theme to this field.', 'crum'),
            ),
			array(
				'id' => 'fixed_menu_show',
				'type' =>'button_set',
				'title' => __('Disable fixed menu?', 'crum'),
				'desc' => __('Enable or disable sticky menu', 'crum'),
				'options' => array('1' => 'Yes', '0' => 'No'),
				'std' => '0'
			),
        ),

    );

    $sections[] = array(
        'title' => __('Social accounts', 'crum'),
        'desc' => __('<p class="description">Type links for social accounts</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'user',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(
            array(
                'id' => 'fb_link',
                'type' => 'text',
                'title' => __('Facebook link', 'crum'),
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://facebook.com'
            ),
            array(
                'id' => 'fb_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'tw_link',
                'type' => 'text',
                'title' => __('Twitter link', 'crum'),
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://twitter.com'
            ),
            array(
                'id' => 'tw_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'in_link',
                'type' => 'text',
                'title' => __('Instagram link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://instagram.com'
            ),
            array(
                'id' => 'in_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'vi_link',
                'type' => 'text',
                'title' => __('Vimeo link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://vimeo.com'
            ),
            array(
                'id' => 'vi_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'lf_link',
                'type' => 'text',
                'title' => __('Last FM link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://lastfm.com'
            ),
            array(
                'id' => 'lf_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'vk_link',
                'type' => 'text',
                'title' => __('Vkontakte link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://vk.com'
            ),
            array(
                'id' => 'vk_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'yt_link',
                'type' => 'text',
                'title' => __('YouTube link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://youtube.com'
            ),
            array(
                'id' => 'yt_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'de_link',
                'type' => 'text',
                'title' => __('Deviantart link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'https://deviantart.com/'
            ),
            array(
                'id' => 'de_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'li_link',
                'type' => 'text',
                'title' => __('LinkedIN link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://linkedin.com'
            ),
            array(
                'id' => 'li_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'gp_link',
                'type' => 'text',
                'title' => __('Google + link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'https://accounts.google.com/'
            ),
            array(
                'id' => 'gp_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'pi_link',
                'type' => 'text',
                'title' => __('Picasa link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://picasa.com'
            ),
            array(
                'id' => 'pi_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'pt_link',
                'type' => 'text',
                'title' => __('Pinterest link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://pinterest.com'
            ),
            array(
                'id' => 'pt_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'wp_link',
                'type' => 'text',
                'title' => __('Wordpress link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://wordpress.com'
            ),
            array(
                'id' => 'wp_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'db_link',
                'type' => 'text',
                'title' => __('Dropbox link', 'crum'),
                
                'desc' => __('Paste link to your account', 'crum'),
                'std' => 'http://dropbox.com'
            ),

            array(
                'id' => 'db_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 'fli_link',
                'type' => 'text',
                'title' => __('Flickr link', 'crum'),

                'desc' => __('Paste link to your account', 'crum'),
                'std' => ''
            ),

            array(
                'id' => 'fli_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),

                'std' => '0'// 1 = on | 0 = off
            ),

            array(
                'id' => 'rss_link',
                'type' => 'text',
                'title' => __('RSS', 'crum'),
                
                'desc' => __('Paste alternative link to Rss', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'rss_show',
                'type' => 'checkbox',
                'title' => __('Show in header', 'crum'),
                'sub_desc' => __('If checked - will be display in header of theme ', 'crum'),
                
                'std' => '0'// 1 = on | 0 = off
            ),
        ),
    );

    $sections[] = array(
        'title' => __('Posts list options', 'crum'),
        'desc' => __('<p class="description">Parameters for posts and archives (social share etc)</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'folder-open-alt',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(

            array(
                'id' => 'info_msc',
                'type' => 'info',
                'desc' => __('<h3 class="description">Inner post page options</h3>', 'crum')
            ),


            array(
                'id' => 'post_share_button',
                'type' => 'button_set',
                'title' => __('Social share buttons', 'crum'),
                'desc' => __('With this option you may activate or deactivate social share buttons. and date on inner post page', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'custom_share_code',
                'type' => 'textarea',
                'title' => __('Custom share code', 'crum'),
                'desc' => __('You may add any other social share buttons to this field.', 'crum'),
            ),

            array(
                'id' => 'autor_box_disp',
                'type' => 'button_set',
                'title' => __('Author Info', 'crum'),
                
                'desc' => __('This option enables you to insert information about the author of the post.', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'thumb_inner_disp',
                'type' => 'button_set', //the field type
                'title' => __('Thumbnail on inner page', 'crum'),
                'desc' => __('Display featured image on single post', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'//this should be the key as defined above
            ),
			array(
				'id' => 'page_comments_display',
				'type' => 'button_set',
				'title' => __('Comments on pages', 'crum'),
				'desc' => __('Display comments block on pages. If you want to disable comments on particular page, edit that page and uncheck "Allow comments" in "Discussion" section. ', 'crum'),
				'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
				'std' => '0'
			),
            array(
                'id' => 'info_msc',
                'type' => 'info',
                'desc' => __('<h3 class="description">Archive page options</h3>', 'crum')
            ),

            array(
                'id' => 'thumb_image_crop',
                'type' => 'button_set',
                'title' => __('Crop thumbnails', 'crum'),
                'desc' => __('Post thumbnails image crop', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'
            ),

            array(
                'id' => 'post_thumbnails_width',
                'type' => 'text',
                'title' => __('Post thumbnail width (in px)', 'crum'),
                'validate' => 'numeric',
                'std' => '900'
            ),
            array(
                'id' => 'post_thumbnails_height',
                'type' => 'text',
                'title' => __('Post  thumbnail height (in px)', 'crum'),
                'validate' => 'numeric',
                'std' => '400',
            ),
            array(
                'id' => 'post_header',
                'type' => 'button_set',
                'title' => __('Post info', 'crum'),
                'desc' => __('It is information about the post (time and date of creation, author, comments on the post).', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'//this should be the key as defined above
            ),
			array(
				'id' => 'excerpt_length',
				'type' => 'text',
				'title' => __('Excerpt length','crum'),
				'desc' => __('You can set excerpt length, that will be displayed on your blog page.','crum'),
				'validate' => 'numeric',
				'std' => '30'
			),


        ),
    );

    $sections[] = array(
        'title' => __('Portfolio Options', 'crum'),
        
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'camera',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(
            array(
                'id' => 'portfolio_page_select',
                'type' => 'pages_select',
                'title' => __('Portfolio page', 'crum'),

                'desc' => __('Please select main portfolio page (for proper urls)', 'crum'),
                'args' => array()//uses get_pages
            ),
            array(
                'id' => 'folio_sorting',
                'type' => 'button_set', //the field type
                'title' => __('Panel for items sorting ', 'crum'),
                'sub_desc' => __('Display panel for portfolio isotope items sorting by category', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'//this should be the key as defined above
            ),
            array(
                'id' => 'portfolio_single_style',
                'type' => 'button_set', //the field type
                'title' => __('Portfolio text location', 'crum'),
                'sub_desc' => __('Select text layout on inner page', 'crum'),
                
                'options' =>array(
                    'left'=>'To the right',
                    'full'=>'Full width',
                ),
                'std' => 'left',
            ),
            array(
                'id' => 'portfolio_single_slider',
                'type' => 'button_set', //the field type
                'title' => __('Portfolio image display', 'crum'),
                'sub_desc' => __('Display attached images of inner portfolio page as:', 'crum'),
                
                'options' =>array(
                    'slider'=>'Slider',
                    'full'=>'Items',
                ),
                'std' => 'slider',
            ),

            array(
                'id' => 'recent_items_disp',
                'type' => 'button_set', //the field type
                'title' => __('Display block under single item', 'crum'),
                'sub_desc' => __('Block with recent items', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'//this should be the key as defined above
            ),

			array(
				'id' => 'portfolio_excerpt',
				'type' => 'button_set',
				'title' => __('Display Custom Excerpt '),
				'sub_desc' => __('If enabled custom excerpt will be displayed under portfolio featured images on portfolio Grid pages'),
				'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
				'std' => '0'
			),

			array(
                'id' => 'block_single_folio_item',
                'type' => 'textarea',
                'title' => __('Block shortcode', 'crum'),
                'sub_desc' => __('By default here is displayed Block with recent items [mvb_recent_works  main_title="Recent projects"][/mvb_recent_works]', 'crum'),
                'std' => '[mvb_recent_works  main_title="Recent projects"][/mvb_recent_works]'
            ),

        ),
    );

    $sections[] = array(
        'title' => __('Styling Options', 'crum'),
        'desc' => __('<p class="description">Style parameters of body and footer</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'cogs',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(

            array(
                'id' => 'info_msc',
                'type' => 'info',
                'desc' => __('<h3 class="description">Main site colors setup</h3>', 'crum')
            ),

            array(
                'id' => 'main_site_color',
                'type' => 'color',
                'title' => __('Main site color', 'crum'),
                'desc' => __('Color of buttons, tabs, links, borders etc.', 'crum'),
                'std' => '#ff6565'
            ),
            array(
                'id' => 'secondary_site_color',
                'type' => 'color',
                'title' => __('Secondary site color', 'crum'),
                'desc' => __('Color of inactive or hovered elements', 'crum'),
                'std' => '#36bae2'
            ),
            array(
                'id' => 'font_site_color',
                'type' => 'color',
                'title' => __('Color of text', 'crum'),
                'desc' => __('Main text color', 'crum'),
                'std' => ''
            ),

            array(
                'id' => 'info_sth',
                'type' => 'info',
                'desc' => __('<h3 class="description">Page title background options</h3>', 'crum')
            ),
            array(
                'id' => 'stan_header',
                'type' => 'button_set',
                'title' => __('Page title background', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'stan_header_color',
                'type' => 'color',
                'title' => __('Default background color for header', 'crum'),
                'std' => '#20bce3'
            ),
            array(
                'id' => 'stan_header_image',
                'type' => 'upload',
                'title' => __('Default background image for header', 'crum'),
                'desc' => __('Upload your own background image or pattern.', 'crum'),
                'std' => $assets_folder.'pic/page-header-default.jpg'
            ),

            array(
                'id' => 'stan_header_fixed',
                'type' => 'button_set',
                'title' => __('Fix image position', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'// 1 = on | 0 = off
            ),

			array(
				'id' => 'stan_header_font_color',
				'type' => 'color',
				'title' => __('Select stunning header font color','crum'),
				'std' => '#fffafa'
			),

            array(
                'id' => 'info_sth',
                'type' => 'info',
                'desc' => __('<h3 class="description">Body styling options</h3>', 'crum')
            ),

            array(
                'id' => 'site_boxed',
                'type' => 'button_set',
                'title' => __('Body layout', 'crum'),
                
                
                'options' => array('0' => 'Full width', '1' => 'Boxed'),
                'std' => '0',
            ),

            array(
                'id' => 'info_bxd',
                'type' => 'info',
                'desc' => __('<h4 class="description">body site options</h4>', 'crum')
            ),


            //Body wrapper
            array(
                'id' => 'wrapper_bg_color',
                'type' => 'color',
                'title' => __('Content background color', 'crum'),
                'desc' => __('Select background color.', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'wrapper_bg_image',
                'type' => 'upload',
                'title' => __('Content background image', 'crum'),
                'desc' => __('Upload your own background image or pattern.', 'crum')
            ),
            array(
                'id' => 'wrapper_custom_repeat',
                'type' => 'select',
                'title' => __('Content bg image repeat', 'crum'),
                'desc' => __('Select type background image repeat', 'crum'),
                'options' => array('repeat-y' => 'vertically','repeat-x' => 'horizontally','no-repeat' => 'no-repeat', 'repeat' => 'both vertically and horizontally', ),//Must provide key => value pairs for select options
                'std' => 'repeat'
            ),


            array(
                'id' => 'info_bxd',
                'type' => 'info',
                'desc' => __('<h4 class="description">Boxed site options</h4>', 'crum')
            ),

            array(
                'id' => 'body_bg_color',
                'type' => 'color',
                'title' => __('Body background color', 'crum'),
                'desc' => __('Select background color.', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'body_bg_image',
                'type' => 'upload',
                'title' => __('Custom background image', 'crum'),
                
                'desc' => __('Upload your own background image or pattern.', 'crum')
            ),
            array(
                'id' => 'body_custom_repeat',
                'type' => 'select',
                'title' => __('Background image repeat', 'crum'),
                'desc' => __('Select type background image repeat', 'crum'),
                'options' => array('repeat-y' => 'vertically','repeat-x' => 'horizontally','no-repeat' => 'no-repeat', 'repeat' => 'both vertically and horizontally', ),//Must provide key => value pairs for select options
                'std' => ''
            ),
            array(
                'id' => 'body_bg_fixed',
                'type' => 'button_set',
                'title' => __('Fixed body background', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'// 1 = on | 0 = off
            ),

            array(
                'id' => 'info_foot',
                'type' => 'info',
                'desc' => __('<h3 class="description">Footer section options</h3>', 'crum')
            ),

            array(
                'id' => 'footer_bg_color',
                'type' => 'color',
                'title' => __('Footer background color', 'crum'),
                
                'desc' => __('Select footer background color. ', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'footer_font_color',
                'type' => 'color',
                'title' => __('Footer font color', 'crum'),
                
                'desc' => __('Select footer font color.', 'crum'),
                'std' => ''
            ),
            array(
                'id' => 'footer_bg_image',
                'type' => 'upload',
                'title' => __('Custom footer background image', 'crum'),
                
                'desc' => __('Upload your own footer background image or pattern.', 'crum')
            ),
            array(
                'id' => 'footer_custom_repeat',
                'type' => 'select',
                'title' => __('Footer background image repeat', 'crum'),
                
                'desc' => __('Select type background image repeat', 'crum'),
                'options' => array('repeat-y' => 'vertically','repeat-x' => 'horizontally','no-repeat' => 'no-repeat', 'repeat' => 'both vertically and horizontally', ),//Must provide key => value pairs for select options
                'std' => ''
            ),
        ),
    );

    $sections[] = array(
        'title' => __('Contact page options', 'crum'),
        'desc' => __('<p class="description">Contact page options</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'map-marker',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(
            array(
                'id' => 'custom_form_shortcode',
                'type' => 'text',
                'title' => __('Custom Form Shortcode', 'crum'),
                
                'desc' => __('You can paste your shorcode custom form', 'crum'),
                'std' =>''
            ),
            array(
                'id' => 'cont_m_disp',
                'type' => 'button_set',
                'title' => __('Display map on contacts page?', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'cont_m_height',
                'type' => 'text',
                'title' => __('Height of Google Map (in px)', 'crum'),
                
                'std' =>''
            ),
            array(
                'id' => 'cont_m_zoom',
                'type' => 'text',
                'title' => __('Zoom Level', 'crum'),
                'std' =>'14'
            ),
            array(
                'id' => 'map_address',
                'type' => 'multi_text',
                'title' => __('Address on Google Map ', 'crum'),
                'desc' => __('Fill in your address to be shown on Google map.', 'crum'),
                'std' =>'London, Downing street, 10'
            ),
            array(
                'id' => 'contacts_form_mail',
                'type' => 'text',
                'title' => __('Form address', 'crum'),
                'desc' => __('Email address for contact form', 'crum'),
                'std' => get_option('admin_email')
            ),
            array(
                'id' => 'antispam_question',
                'type' => 'text',
                'title' => __('Type the antispam question', 'crum'),
                'desc' => __('Antispam question will protect you from spamers', 'crum'),
                'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                'std' => 'How many legs does elephant have? (number)'
            ),
            array(
                'id' => 'antispam_answer',
                'type' => 'text',
                'title' => __('Type the answer for antispam question', 'crum'),
                'desc' => __('Antispam question will protect you from spamers', 'crum'),
                'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                'std' =>'4'
            ),
            array(
                'id' => 'add_form_text',
                'type' => 'textarea',
                'title' => __('Additional form description', 'crum'),
                'desc' => __('Will be displayed under contact form', 'crum'),
                'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                'std' =>''
            ),

        ),
    );

    $sections[] = array(
        'icon' => 'wrench',
        'title' => __('Layouts Settings', 'crum'),
        'desc' => __('<p class="description">Configure layouts of different pages</p>', 'crum'),
        'fields' => array(
            array(
                'id' => 'pages_layout',
                'type' => 'radio_img',
                'title' => __('Single pages layout', 'crum'),
                'sub_desc' => __('Select one type of layout for single pages', 'crum'),
                
                'options' => array(
                    '1col-fixed' => array('title' => 'No sidebars', 'img' => Redux_OPTIONS_URL.'img/1col.png'),
                    '2c-l-fixed' => array('title' => 'Sidebar on left', 'img' => Redux_OPTIONS_URL.'img/2cl.png'),
                    '2c-r-fixed' => array('title' => 'Sidebar on right', 'img' => Redux_OPTIONS_URL.'img/2cr.png'),
                    '3c-l-fixed' => array('title' => '2 left sidebars', 'img' => Redux_OPTIONS_URL.'img/3cl.png'),
                    '3c-fixed' => array('title' => 'Sidebar on either side', 'img' => Redux_OPTIONS_URL.'img/3cc.png'),
                    '3c-r-fixed' => array('title' => '2 right sidebars', 'img' => Redux_OPTIONS_URL.'img/3cr.png'),
                ),//Must provide key => value(array:title|img) pairs for radio options
                'std' => '1col-fixed'
            ),
            array(
                'id' => 'archive_layout',
                'type' => 'radio_img',
                'title' => __('Archive Pages Layout', 'crum'),
                'sub_desc' => __('Select one type of layout for archive pages', 'crum'),
                
                'options' => array(
                    '1col-fixed' => array('title' => 'No sidebars', 'img' => Redux_OPTIONS_URL.'img/1col.png'),
                    '2c-l-fixed' => array('title' => 'Sidebar on left', 'img' => Redux_OPTIONS_URL.'img/2cl.png'),
                    '2c-r-fixed' => array('title' => 'Sidebar on right', 'img' => Redux_OPTIONS_URL.'img/2cr.png'),
                    '3c-l-fixed' => array('title' => '2 left sidebars', 'img' => Redux_OPTIONS_URL.'img/3cl.png'),
                    '3c-fixed' => array('title' => 'Sidebar on either side', 'img' => Redux_OPTIONS_URL.'img/3cc.png'),
                    '3c-r-fixed' => array('title' => '2 right sidebars', 'img' => Redux_OPTIONS_URL.'img/3cr.png'),
                ),//Must provide key => value(array:title|img) pairs for radio options
                'std' => '2c-l-fixed'
            ),
            array(
                'id' => 'single_layout',
                'type' => 'radio_img',
                'title' => __('Single posts layout', 'crum'),
                'sub_desc' => __('Select one type of layout for single posts', 'crum'),
                
                'options' => array(
                    '1col-fixed' => array('title' => 'No sidebars', 'img' => Redux_OPTIONS_URL.'img/1col.png'),
                    '2c-l-fixed' => array('title' => 'Sidebar on left', 'img' => Redux_OPTIONS_URL.'img/2cl.png'),
                    '2c-r-fixed' => array('title' => 'Sidebar on right', 'img' => Redux_OPTIONS_URL.'img/2cr.png'),
                    '3c-l-fixed' => array('title' => '2 left sidebars', 'img' => Redux_OPTIONS_URL.'img/3cl.png'),
                    '3c-fixed' => array('title' => 'Sidebar on either side', 'img' => Redux_OPTIONS_URL.'img/3cc.png'),
                    '3c-r-fixed' => array('title' => '2 right sidebars', 'img' => Redux_OPTIONS_URL.'img/3cr.png'),
                ),//Must provide key => value(array:title|img) pairs for radio options
                'std' => '2c-l-fixed'
            ),
            array(
                'id' => 'search_layout',
                'type' => 'radio_img',
                'title' => __('Search results layout', 'crum'),
                'sub_desc' => __('Select one type of layout for search results', 'crum'),
                
                'options' => array(
                    '1col-fixed' => array('title' => 'No sidebars', 'img' => Redux_OPTIONS_URL.'img/1col.png'),
                    '2c-l-fixed' => array('title' => 'Sidebar on left', 'img' => Redux_OPTIONS_URL.'img/2cl.png'),
                    '2c-r-fixed' => array('title' => 'Sidebar on right', 'img' => Redux_OPTIONS_URL.'img/2cr.png'),
                    '3c-l-fixed' => array('title' => '2 left sidebars', 'img' => Redux_OPTIONS_URL.'img/3cl.png'),
                    '3c-fixed' => array('title' => 'Sidebar on either side', 'img' => Redux_OPTIONS_URL.'img/3cc.png'),
                    '3c-r-fixed' => array('title' => '2 right sidebars', 'img' => Redux_OPTIONS_URL.'img/3cr.png'),
                ),//Must provide key => value(array:title|img) pairs for radio options
                'std' => '2c-l-fixed'
            ),
            array(
                'id' => '404_layout',
                'type' => 'radio_img',
                'title' => __('404 Page Layout', 'crum'),
                'sub_desc' => __('Select one of layouts for 404 page', 'crum'),
                
                'options' => array(
                    '1col-fixed' => array('title' => 'No sidebars', 'img' => Redux_OPTIONS_URL.'img/1col.png'),
                    '2c-l-fixed' => array('title' => 'Sidebar on left', 'img' => Redux_OPTIONS_URL.'img/2cl.png'),
                    '2c-r-fixed' => array('title' => 'Sidebar on right', 'img' => Redux_OPTIONS_URL.'img/2cr.png'),
                    '3c-l-fixed' => array('title' => '2 left sidebars', 'img' => Redux_OPTIONS_URL.'img/3cl.png'),
                    '3c-fixed' => array('title' => 'Sidebar on either side', 'img' => Redux_OPTIONS_URL.'img/3cc.png'),
                    '3c-r-fixed' => array('title' => '2 right sidebars', 'img' => Redux_OPTIONS_URL.'img/3cr.png'),
                ),//Must provide key => value(array:title|img) pairs for radio options
                'std' => '2c-l-fixed'
            )
        ),
    );

    $sections[] = array(
        'title' => __('Twitter panel options', 'crum'),
        'desc' => __('<p class="description">More information about api keys and how to get it you can find in that tutorial <a href="http://crumina.net/how-do-i-get-consumer-key-for-sign-in-with-twitter/">http://crumina.net/how-do-i-get-consumer-key-for-sign-in-with-twitter/</a></a></p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' =>'twitter',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(

            array(
                'id' => 't_panel_padding',
                'type' => 'button_set',
                'title' => __('Section padding', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'// 1 = on | 0 = off
            ),
            array(
                'id' => 't_panel_bg_color',
                'type' => 'color',
                'title' => __('Background color for twitter panel', 'crum'),
                'std' => '#20bce3'
            ),
            array(
                'id' => 't_panel_bg_image',
                'type' => 'upload',
                'title' => __('Background image for twitter panel', 'crum'),
                'desc' => __('Upload your own background image or pattern.', 'crum'),
                'std' => $assets_folder.'pic/twitter-row-bg.jpg'
            ),


            array(
                'id' => 'footer_tw_disp',
                'type' => 'button_set',
                'title' => __('Display twitter statuses before footer', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'// 1 = on | 0 = off
            ),

            array(
                'id' => 'cachetime',
                'type' => 'text',
                'title' => __('Cache Tweets in every:', 'crum'),
                'sub_desc' => __('In minutes', 'crum'),
                'std' => '1'
            ),
            array(
                'id' => 'numb_lat_tw',
                'type' => 'text',
                'title' => __('Number of latest tweets display:', 'crum'),
                
                'std' => '10'
            ),
            array(
                'id' => 'username',
                'type' => 'text',
                'title' => __('Username:', 'crum'),
                'std' => 'Envato'
            ),

            array(
                'id' => 'twiiter_consumer',
                'type' => 'text',
                'title' => __('Consumer key:', 'crum'),
                'std' => '',

            ),
            array(
                'id' => 'twiiter_con_s',
                'type' => 'text',
                'title' => __('Consumer secret:', 'crum'),
                'std' => '',
            ),
            array(
                'id' => 'twiiter_acc_t',
                'type' => 'text',
                'title' => __('Access token:', 'crum'),
                
                'std' => '',
            ),
            array(
                'id' => 'twiiter_acc_t_s',
                'type' => 'text',
                'title' => __('Access token secret:', 'crum'),
                'std' => '',
            ),
        ),
    );

    $sections[] = array(
        'title' => __('Footer section options', 'crum'),
        'desc' => __('<p class="description">Footer section options</p>', 'crum'),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => 'tasks',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array(


            array(
                'id' => 'footer_soc_networks',
                'type' => 'button_set',
                'title' => __('Display Social networks links in footer', 'crum'),
                'options' => array('1' => __('On', 'crum'), '0' => __('Off', 'crum')),
                'std' => '0'// 1 = on | 0 = off
            ),

            array(
                'id' => 'logo_footer',
                'type' => 'upload',
                'title' => __('Logotype in footer', 'crum'),
                'desc' => __('Will be displayed before copyright text', 'crum'),
                'std'  => $assets_folder.'img/logo-footer.png',
            ),

            array(
                'id' => 'copyright_footer',
                'type' => 'text',
                'title' => __('Show copyright', 'crum'),

                'desc' => __('Fill in the copyright text.', 'crum'),
                'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                'std' => 'My copyright info 2013'
            ),

        ),
    );

                
    $tabs = array();

    if (function_exists('wp_get_theme')){
        $theme_data = wp_get_theme();
        $item_uri = $theme_data->get('ThemeURI');
        $description = $theme_data->get('Description');
        $author = $theme_data->get('Author');
        $author_uri = $theme_data->get('AuthorURI');
        $version = $theme_data->get('Version');
        $tags = $theme_data->get('Tags');
    }else{
        $theme_data = get_theme_data(trailingslashit(get_stylesheet_directory()) . 'style.css');
        $item_uri = $theme_data['URI'];
        $description = $theme_data['Description'];
        $author = $theme_data['Author'];
        $author_uri = $theme_data['AuthorURI'];
        $version = $theme_data['Version'];
        $tags = $theme_data['Tags'];
     }
    
    $item_info = '<div class="redux-opts-section-desc">';
    $item_info .= '<p class="redux-opts-item-data description item-uri">' . __('<strong>Theme URL:</strong> ', 'crum') . '<a href="' . $item_uri . '" target="_blank">' . $item_uri . '</a></p>';
    $item_info .= '<p class="redux-opts-item-data description item-author">' . __('<strong>Author:</strong> ', 'crum') . ($author_uri ? '<a href="' . $author_uri . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-version">' . __('<strong>Version:</strong> ', 'crum') . $version . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-description">' . $description . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-tags">' . __('<strong>Tags:</strong> ', 'crum') . implode(', ', $tags) . '</p>';
    $item_info .= '</div>';

    $tabs['item_info'] = array(
		'icon' => 'info-sign',
		'icon_class' => 'icon-large',
        'title' => __('Theme Information', 'crum'),
        'content' => $item_info
    );
    
    if(file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
        $tabs['docs'] = array(
			'icon' => 'book',
			'icon_class' => 'icon-large',
            'title' => __('Documentation', 'crum'),
            'content' => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
        );
    }

    global $Redux_Options;
    $Redux_Options = new Redux_Options($sections, $args, $tabs);

}
add_action('init', 'setup_framework_options', 0);

/*
 * 
 * Custom function for the callback referenced above
 *
 */
function my_custom_field($field, $value) {
    print_r($field);
    print_r($value);
}

/*
 * 
 * Custom function for the callback validation referenced above
 *
 */
function validate_callback_function($field, $value, $existing_value) {
    $error = false;
    $value =  'just testing';
    /*
    do your validation

    if(something) {
        $value = $value;
    } elseif(somthing else) {
        $error = true;
        $value = $existing_value;
        $field['msg'] = 'your custom error message';
    }
    */

    $return['value'] = $value;
    if($error == true) {
        $return['error'] = $field;
    }
    return $return;
}