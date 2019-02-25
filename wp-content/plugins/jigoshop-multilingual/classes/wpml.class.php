<?php

class JigoShopML {

    function __construct( ) {
        add_action( 'plugins_loaded', array( $this, 'init' ), 2 );
    }

    function init( ) {
        if ( !defined( 'ICL_SITEPRESS_VERSION' ) || ICL_PLUGIN_INACTIVE ) {
            if ( !function_exists( 'is_multisite' ) || !is_multisite() ) {
                add_action( 'admin_notices', array( $this, 'no_wpml_warning' ) );
            }

            return false;
        } else if ( version_compare( ICL_SITEPRESS_VERSION, '2.0.5', '<' ) ) {
            add_action( 'admin_notices', array( $this, 'old_wpml_warning' ) );

            return false;
        } else if ( !class_exists( 'jigoshop' ) ) {
            add_action( 'admin_notices', array( $this, 'no_jigoshop' ) );

            return false;
        }

        //add_filter( 'icl_ls_languages', array( $this, 'language_selector' ) );
        add_filter( 'jigoshop_params', array( $this, 'params' ) );

        add_filter( 'jigoshop_get_cart_url', array( $this, 'convert_url' ) );
        add_filter( 'jigoshop_get_checkout_url', array( $this, 'convert_url' ) );
        add_filter( 'jigoshop_get_return_url', array( $this, 'convert_url' ) );
        add_filter( 'jigoshop_get_remove_url', array( $this, 'convert_url' ) );
        add_filter( 'jigoshop_get_cancel_order', array( $this, 'convert_url' ) );

        add_filter( 'jigoshop_get_cart_page_id', array( $this, 'get_cart_page_id' ) );
        add_filter( 'jigoshop_get_myaccount_page_id', array( $this, 'get_myaccount_page_id' ) );
        add_filter( 'jigoshop_get_edit_address_page_id', array( $this, 'get_edit_address_page_id' ) );
        add_filter( 'jigoshop_get_view_order_page_id', array( $this, 'get_view_order_page_id' ) );
        add_filter( 'jigoshop_get_track_order_page_id', array( $this, 'get_track_order_page_id' ) );
        add_filter( 'jigoshop_get_change_password_page_id', array( $this, 'get_change_password_page_id' ) );
        add_filter( 'jigoshop_get_checkout_redirect_page_id', array( $this, 'get_thanks_page_id' ) );
        add_filter( 'jigoshop_get_shop_page_id', array( $this, 'shop_page_id'  ) );
        add_filter( 'jigoshop_get_shop_redirect_page_id', array( $this, 'shop_redirect_page_id'  ) );
        add_filter('post_type_archive_link',array($this,'shop_redirect'),11,2);
        add_filter( 'jigoshop_get_checkout_page_id', array( $this, 'get_checkout_page_id'  ) );
        add_filter( 'jigoshop_get_pay_page_id', array( $this, 'get_pay_page_id'  ) );


        add_filter( 'jigoshop_product_url_display_in_cart', array( $this, 'product_url_display_in_cart' ), 11, 2 );
        add_filter('jigoshop_product_title',array($this,'product_title'),11,2);
        add_filter('add_to_cart_redirect',array($this,'add_to_cart_redirect'));
        add_filter( 'jigoshop_get_order', array( $this, 'order_language' ), 12, 2 );
        if (!is_admin()) {
           add_filter( 'jigoshop_session_location_filter', array( $this, 'session_location' ) );
        }
        add_filter( 'jigoshop_get_checkout_payment_url', array( $this, 'get_checkout_payment_url' ) );
        add_filter( 'jigoshop_is_ajax_payment_successful', array( $this, 'is_ajax_payment_successful' ) );
        add_filter( 'jigoshop_product_id_add_to_cart_filter', array( $this, 'product_id_add_to_cart' ) );
        add_filter( 'jigoshop_cart_product_title', array( $this, 'cart_product_title' ), 20, 2 );
		add_filter( 'jigoshop_available_payment_gateways', array( $this, 'translate_payment_gateways' ) );
        add_filter( 'jigoshop_payment_gateways', array( $this, 'translate_payment_gateways' ) );
        add_filter( 'jigoshop_available_shipping_methods', array( $this, 'translate_shipping_methods' ) );

        add_filter('jigoshop_product_attribute_value_custom',array($this,'attribute_value_custom'),11,2);
        add_filter('jigoshop_attribute_label',array($this,'attribute_label'),11,2);
        add_action('jigoshop_attribute_admin_add_after_save',array($this,'register_attribute_name'),10,3 );

        // Slug translation
        add_filter('gettext_with_context', array($this, 'default_slug_translation'), 0, 4);

        if ( is_admin() ) {
            add_action( 'admin_footer', array( $this, 'documentation_links'  ) );
            add_action( 'admin_init', array( $this, 'make_new_attributes_translatable' ) );
            add_action( 'admin_notices', array( $this, 'admin_notice_after_install' ) );
            add_filter( 'manage_edit-product_columns', array($this,'edit_product_columns'),11); //after jigoshop filter
        } else {
            //add_filter('pre_get_posts', array($this, 'shop_page_query'), 9);
            //add_filter('icl_ls_languages', array($this, 'translate_ls_shop_url'));
            add_filter('parse_request', array($this, 'adjust_shop_page'));
        }

        if ( isset( $_GET[ 'jsml_action' ] ) && $_GET[ 'jsml_action' ] = 'dismiss' ) {
            update_option( 'wpml_dismiss_doc_main', 'yes' );
        }

        register_deactivation_hook( __FILE__, array( $this, 'jsml_deactivate' ) );

		if (defined('DOING_AJAX') && DOING_AJAX){
			do_action('icl_localize_on_ajax');
		}
        add_action( 'icl_localize_on_ajax', array( $this, 'localize_on_ajax') );
        add_action('save_post', array($this, 'sync_variations'), 11, 2); // After WPML
        add_filter('icl_make_duplicate', array($this, 'sync_variations_for_duplicates'), 11, 4);
        add_action('updated_post_meta', array($this,'update_post_meta'), 100, 4);
        add_action('added_post_meta', array($this,'update_post_meta'), 100, 4);

        add_action('delete_post', array($this,'delete_post_actions'),9); //before wpml
        add_action('wp_trash_post', array($this,'trash_post_actions'),9);
        add_action('untrash_post', array($this,'untrashed_post_actions'),11);

    }

    /**
     * Admin notice after plugin install.
     */
    function admin_notice_after_install( ) {
        if ( get_option( 'wpml_dismiss_doc_main' ) != 'yes' ) {
            $url = $_SERVER[ 'REQUEST_URI' ];
            $pos = strpos( $url, '?' );

            if ( $pos !== false ) {
                $url .= '&jsml_action=dismiss';
            } else {
                $url .= '?jsml_action=dismiss';
            }
?>
            <div id="message" class="updated message fade" style="clear:both;margin-top:5px;"><p>
                <?php
            _e( 'Would you like to see a quick overview?', 'sitepress' );
?>
                </p>
                <p>
                <a class="button-primary" href="http://wpml.org/documentation/related-projects/jigoshop-multilingual/" target="_blank">Learn how to turn your e-commerce site multilingual</a>
                <a class="button-secondary" href="<?php
            echo $url;
?>">Dismiss</a>
                </p>
            </div>
    <?php
        }
    }


    /**
     * Outputs documentation links.
     */
    function documentation_links( ) {
        global $post, $pagenow;

        $get_post_type = get_post_type( @$post->ID );

        if ( $get_post_type == 'product' && $pagenow == 'edit.php' ) {
            $prot_link = '<span class="button" style="padding:4px;margin-top:10px;"><img align="baseline" src="' . ICL_PLUGIN_URL . '/res/img/icon16.png" width="16" height="16" style="margin-bottom:-4px" /> <a href="http://wpml.org/documentation/related-projects/jigoshop-multilingual/#translating_products" target="_blank">' . __( 'How to translate products', 'sitepress' ) . '<\/a>' . '<\/span>'?>
                <script type="text/javascript">
                    jQuery(".subsubsub").append('<?php
            echo $prot_link;
?>');
                </script>
        <?php
        }

        if ( isset( $_GET[ 'taxonomy' ] ) ) {
            $pos = strpos( $_GET[ 'taxonomy' ], 'pa_' );

            if ( $pos !== false && $pagenow == 'edit-tags.php' ) {
                $prot_link = '<span class="button" style="padding:4px;margin-top:0px; float: left;"><img align="baseline" src="' . ICL_PLUGIN_URL . '/res/img/icon16.png" width="16" height="16" style="margin-bottom:-4px" /> <a href="http://wpml.org/documentation/related-projects/jigoshop-multilingual/#translating_attributes" target="_blank" style="text-decoration: none;">' . __( 'How to translate attributes', 'sitepress' ) . '<\/a>' . '<\/span><br \/><br \/>'?>
                        <script type="text/javascript">
                            jQuery("table.widefat").before('<?php
                echo $prot_link;
?>');
                        </script>
                <?php
            }
        }

        if ( isset( $_GET[ 'taxonomy' ] ) && $_GET[ 'taxonomy' ] == 'product_cat' ) {
            $prot_link = '<span class="button" style="padding:4px;margin-top:0px; float: left;"><img align="baseline" src="' . ICL_PLUGIN_URL . '/res/img/icon16.png" width="16" height="16" style="margin-bottom:-4px" /> <a href="http://wpml.org/documentation/related-projects/jigoshop-multilingual/#translating_product_categories" target="_blank" style="text-decoration: none;">' . __( 'How to translate product categories', 'sitepress' ) . '<\/a>' . '<\/span><br \/><br \/>'?>
                        <script type="text/javascript">
                            jQuery("table.widefat").before('<?php
            echo $prot_link;
?>');
                        </script>
                <?php
        }
    }

    /**
     * JigoShop Multilingual deactivation hook.
     */
    function jsml_deactivate( ) {
        delete_option( 'wpml_dismiss_doc_main' );
    }

    /**
     * Makes all new attributes translatable.
     */
    function make_new_attributes_translatable( ) {
        if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'jigoshop_attributes' ) {
            $wpml_settings = get_option( 'icl_sitepress_settings' );

            $get_all_taxonomies = get_taxonomies( @$args[ 'name' ] );

            foreach ( $get_all_taxonomies as $tax_key => $taxonomy ) {
                $pos = strpos( $taxonomy, 'pa_' );

                // get only product attribute taxonomy name
                if ( $pos !== false ) {
                    if (!empty($wpml_settings[ 'taxonomies_sync_option' ]) ) {
                        foreach ( $wpml_settings[ 'taxonomies_sync_option' ] as $wpml_tax_key => $tax ) {
                            // set it as translatable
                            $wpml_settings[ 'taxonomies_sync_option' ][ $taxonomy ] = 1;
                        }
                    } else {
                        $wpml_settings[ 'taxonomies_sync_option' ][ $taxonomy ] = 1;
                    }
                }
            }

            update_option( 'icl_sitepress_settings', $wpml_settings );
        }
    }

    /**
     * Adds admin notice.
     */
    function no_wpml_warning( ) {
?>
        <div class="message error"><p><?php
        printf( __( 'JigoShop Multilingual is enabled but not effective. It requires <a href="%s">WPML</a> in order to work.', 'plugin jigoshop' ), 'http://wpml.org/' );
?></p></div>
    <?php
    }

    /**
     * Adds admin notice.
     */
    function old_wpml_warning( ) {
?>
        <div class="message error"><p><?php
        printf( __( 'JigoShop Multilingual is enabled but not effective. It is not compatible with  <a href="%s">WPML</a> versions prior 2.0.5.', 'plugin jigoshop' ), 'http://wpml.org/' );
?></p></div>
    <?php
    }

    /**
     * Adds admin notice.
     */
    function no_jigoshop( ) {
?>
        <div class="message error"><p><?php
        printf( __( 'JigoShop Multilingual is enabled but not effective. It requires <a href="%s">JigoShop</a> in order to work.', 'plugin jigoshop' ), 'http://jigoshop.com/' );
?></p></div>
    <?php
    }

    

    /**
     * Filters JigoShop product link in the cart page.
     *
     * @global type $sitepress
     * @param type $url
     * @param type $cart_item_key
     * @return type
     */
    function product_url_display_in_cart( $url, $cart_item_key ) {
        global $sitepress;
        return $this->convert_url( $url );
    }

    /**
     * Filters JigoShop product ID when adding the product to the cart.
     *
     * @param type $product_id
     * @return type
     */
    function product_id_add_to_cart( $product_id ) {
        $product_id = icl_object_id( $product_id, 'product', true, icl_get_default_language() );

        return $product_id;
    }

    /**
     * Synchronizes post meta 'stock' and 'stock_status' betweeen translated posts.
     *
     * @global type $sitepress
     * @param type $meta_id
     * @param type $object_id
     * @param type $meta_key
     * @param type $_meta_value
     */
    function updated_post_meta_hook( $meta_id, $object_id, $meta_key, $_meta_value ) {
        global $sitepress;
        $update_meta_keys = array(
             'stock',
            'stock_status'
        );

        if ( in_array( $meta_key, $update_meta_keys ) ) {
            $translations = $sitepress->get_element_translations( $object_id, 'product' );

            foreach ( $translations as $t ) {
                if ( !$t->original ) {
                    if ( $meta_key == 'stock' ) {
                        update_post_meta( $t->translation_id, 'stock', $_meta_value );
                    } else if ( $meta_key = 'stock_status' ) {
                        update_post_meta( $t->translation_id, 'stock_status', $_meta_value );
                    }
                }
            }
        }
    }


    /**
     * Filters Jigoshop redirect location.
     * 
     * @global type $sitepress
     * @param type $link
     * @return type 
     */

    function convert_url($link) {
        global $sitepress;
        return html_entity_decode($sitepress->convert_url($link));
    }

    /**
     * Filters JigoShop successful page URL after the checkout process.
     *
     * @global type $post
     * @global type $sitepress
     * @return type
     */
    function is_ajax_payment_successful( $result ) {
        global $sitepress;

        if ( $sitepress->get_current_language() !== $sitepress->get_default_language() ) {
            $lang = $_SESSION[ 'wpml_globalcart_language' ];

            $sitepress->switch_lang( $lang );

        }

        return $result;
    }

    /**
     * Filters JigoShop cancel order link.
     *
     * @global type $sitepress
     * @param type $link
     * @return type
     */
    function get_cancel_order_url( $link ) {
        global $sitepress;
        return $sitepress->convert_url( $link );
    }

    /**
     * Filters JigoShop return URL after payment.
     *
     * @global type $sitepress
     * @param type $link
     * @return type
     */
    function get_return_url( $link ) {
        global $sitepress;
        return $sitepress->convert_url( $link );
    }

    /**
     * Filters JigoShop remove URL when item removed from cart.
     *
     * @global type $sitepress
     * @param type $link
     * @return type
     */
    function get_remove_url( $link ) {
        global $sitepress;
        return $sitepress->convert_url( $link );
    }


    /**
     * Filters JigoShop redirect URL.
     *
     * @global type $sitepress
     * @param type $link
     * @return type
     */
    function session_location( $link ) {
        global $sitepress;

        return $sitepress->convert_url( $link );
    }

    /**
     * Filters JigoShop payment successful URL.
     *
     * @global type $sitepress
     * @param type $result
     * @return type
     */
    function get_payment_successful_url( $link ) {
        global $sitepress;
        return $sitepress->convert_url( $link );
    }


    /**
     * Filters JigoShop shop URL.
     *
     */
    function shop_page_id( ) {
        global $post;
        $id = icl_object_id( get_option( 'jigoshop_shop_page_id' ), 'page', true );
        //need this hack for the 'return to shop' button in cart page and 'continue shopping' button in thank you page
        if (isset($post) && ($post->ID == $this->get_cart_page_id() || $post->ID == $this->get_thanks_page_id())) {
            return get_permalink(icl_object_id( get_option( 'jigoshop_shop_page_id' ), 'page', true ));
        }
        return $id;
    }

    /**
     * Filters JigoShop shop_redirect URL.
     *
     */
    function shop_redirect_page_id( ) {
        return get_permalink(icl_object_id( get_option( 'jigoshop_shop_redirect_page_id' ), 'page', true ));
    }


    function shop_redirect($link,$post_type) {
        global $sitepress;
        if ('product' == $post_type && $sitepress->get_option('language_negotiation_type') == 3) {
	    $link = add_query_arg("lang",$sitepress->get_current_language(),$link);
        }
        return $link;
    }
    /**
     * Filters JigoShop cart page ID.
     *
     */
    function get_cart_page_id( ) {
        return icl_object_id( get_option( 'jigoshop_cart_page_id' ), 'page', true );
    }

/**
     * Filters JigoShop view order page ID.
     *
     */
    function get_view_order_page_id() {
        return icl_object_id( get_option( 'jigoshop_view_order_page_id' ), 'page', true );
    }

    /**
     * Filters JigoShop track order page ID.
     *
     */
    function get_track_order_page_id() {
        return icl_object_id( get_option( 'jigoshop_track_order_page_id' ), 'page', true );
    }

    /**
     * Filters JigoShop thanks page ID.
     *
     */
    function get_thanks_page_id( ) {
        return icl_object_id( get_option( 'jigoshop_thanks_page_id' ), 'page', true );
    }

    /**
     * Filters JigoShop payment link for unpaid - pending orders.
     *
     * @global type $sitepress
     * @param type $link
     * @return type
     */
    function get_checkout_payment_url( $link ) {
        global $sitepress;
        return $sitepress->convert_url( $link );
    }

    /**
     * Filters JigoShop my account link.
     *
     */
    function get_myaccount_page_id( ) {
        return get_permalink( icl_object_id( get_option( 'jigoshop_myaccount_page_id' ), 'page', true ) );
    }

    /**
     * Filters JigoShop my account edit address link.
     *
     */
    function get_edit_address_page_id( ) {
        return get_permalink( icl_object_id( get_option( 'jigoshop_edit_address_page_id' ), 'page', true ) );
    }



    /**
     * Filters JigoShop my account change password link.
     *
     */
    function get_change_password_page_id( ) {
        return get_permalink( icl_object_id( get_option( 'jigoshop_change_password_page_id' ), 'page', true ) );
    }

    /**
     * Filters JigoShop checkout page ID.
     *
     */
    function get_checkout_page_id() {
        return icl_object_id( get_option( 'jigoshop_checkout_page_id' ), 'page', true );
    }

    /**
     * Filters JigoShop pay page ID.
     *
     */
    function get_pay_page_id() {
        return icl_object_id( get_option( 'jigoshop_pay_page_id' ), 'page', true );
    }

    /**
     * Filters JigoShop checkout link.
     *
     */
    function get_checkout_url( ) {
        return get_permalink( icl_object_id( get_option( 'jigoshop_checkout_page_id' ), 'page', true ) );
    }

    /**
     * Filters JigoShop cart link.
     *
     */
    function get_cart_url( ) {
        return get_permalink( icl_object_id( get_option( 'jigoshop_cart_page_id' ), 'page', true ) );
    }

    /**
     * Filters JigoShop params.
     *
     * @global type $sitepress
     * @global type $post
     * @param type $value
     * @return type
     */
    function params( $value ) {
        global $sitepress, $post;
        if ( $sitepress->get_current_language() !== $sitepress->get_default_language() ) {
            $value[ 'checkout_url' ] = admin_url( 'admin-ajax.php?action=jigoshop-checkout&lang=' . $sitepress->get_current_language() );
            $value[ 'ajax_url' ]     = admin_url( 'admin-ajax.php?lang=' . $sitepress->get_current_language() );

            $checkout_page_id            = get_option( 'jigoshop_checkout_page_id' );
            $translated_checkout_page_id = icl_object_id( $checkout_page_id, 'page', false );

            if (isset($post) && $translated_checkout_page_id == $post->ID ) {
                $value[ 'is_checkout' ]                 = 1;
                $_SESSION[ 'wpml_globalcart_language' ] = $sitepress->get_current_language();
            }
        }

        return $value;
    }

    /**
     * Adds language to the order post type.
     *
     * Language was stored before in session created on checkout page.
     * See params().
     *
     * @param type $get_order
     * @param type $id
     * @return type
     */
    function order_language( $get_order, $id ) {
        if ( !get_post_meta( $id, 'wpml_language' ) ) {
            $language = isset( $_SESSION[ 'wpml_globalcart_language' ] ) ? $_SESSION[ 'wpml_globalcart_language' ] : ICL_LANGUAGE_CODE;
            update_post_meta( $id, 'wpml_language', $language );
        }

        return $get_order;
    }

    /**
     * Filters the cart page product title.
     *
     * @param type $title
     * @param type $_product
     * @return type
     */
    function cart_product_title( $title, $_product ) {
        $product_id = icl_object_id( $_product->id, 'product', false, ICL_LANGUAGE_CODE );

        if ( $product_id ) {
            $title = get_the_title( $product_id );
        }

        return $title;
    }

    /**
     * Filters WPML language switcher.
     *
     * @global type $post
     * @global type $sitepress
     * @param type $languages
     * @return type
     */
    function language_selector( $languages ) {
        global $post, $sitepress;

        if ( strpos( basename( $_SERVER[ 'REQUEST_URI' ] ), 'post_type' ) !== false || strpos( basename( $_SERVER[ 'REQUEST_URI' ] ), 'shop' ) !== false ) {
            foreach ( $languages as $lang_code => $language ) {
                $languages[ $lang_code ][ 'url' ] = $sitepress->convert_url( get_option( 'home' ) . '/?post_type=product', $language[ 'language_code' ] );
            }
        }

        return $languages;
    }

    /**
     * Translates payment gateways title and description.
     *
	 * @param type $_available_gateways
     * @return type
     */
	function translate_payment_gateways( $_available_gateways ){
		if( !empty( $_available_gateways )){
			foreach( $_available_gateways as $name => $gateway ){

				if ( is_object( $gateway ) ) {
                    $gateway->description = icl_translate( 'jigoshop', $gateway->title . '_gateway_description', $gateway->description );
					$gateway->title = icl_translate( 'jigoshop', $gateway->title . '_gateway_title', $gateway->title );
					
				}

				$_available_gateways[ $name ] = $gateway;
			}
		}

		return $_available_gateways;
	}


    /**
     * Translates shipping methods title.
     *
     * @param type $methods
     * @return type
     */

    function translate_shipping_methods($methods) {
        
            foreach ($methods as $method) {
                $method->title = icl_translate('plugin jigoshop', $method->title.'_shipping_method',$method->title);
            }
       
        return $methods;
    }


	/**
     * Localizes AJAX loaded content.
     *
	 * @global type $sitepress
     * @return type
     */
	function localize_on_ajax(){
		global $sitepress;

		$current_language = $sitepress->get_current_language();

		$sitepress->switch_lang( $current_language, true );
	}

    function sync_variations_for_duplicates($master_post_id, $lang, $postarr, $id) {
        $this->sync_variations($id, $postarr);
    }

    /**
     * This function takes care of synchronizing variations from original to translations
     */
    function sync_variations($post_id, $post){
        global $wpdb, $pagenow, $sitepress, $sitepress_settings;

        // check it's a product
        $post_type = get_post_type($post_id);
        if ($post_type != 'product') {
            return;
        }

        // exceptions
        $ajax_call = (!empty($_POST['icl_ajx_action']) && $_POST['icl_ajx_action'] == 'make_duplicates');
        $duplicated_post_id = icl_object_id($post_id, 'product', false, $sitepress->get_default_language());
        if (empty($duplicated_post_id) || isset($_POST['autosave'])) {
            return;
        }
        if($pagenow != 'post.php' && $pagenow != 'post-new.php' && !$ajax_call){
            return;
        }
        if (isset($_GET['action']) && $_GET['action'] == 'trash') {
            return;
        }

        // get language code
        $language_details = $sitepress->get_element_language_details($post_id, 'post_product');
        if (empty($language_details)) {
            return;
        }

        // If we reach this point, we go ahead with sync.
        // Remove filter to avoid double sync
        remove_action('save_post', array($this, 'sync_variations'), 11, 2);

        //error_log(__FUNCTION__." $post_id");

        // pick posts to sync
        $posts = array();
        $translations = $sitepress->get_element_translations($language_details->trid, 'post_product');
        foreach ($translations as $translation) {
            if ($translation->original) {
                $duplicated_post_id = $translation->element_id;
            } else {
                $posts[$translation->element_id] = $translation;
            }
        }

        //sync product_type
        $product_type = wp_get_post_terms($duplicated_post_id,'product_type',array('fields' => 'slugs'));
        foreach ($translations as $translation) {
            if (!$translation->original) {
                wp_set_object_terms($translation->element_id,$product_type[0],'product_type');
            }
        }

        // TODO: move outside the loop all db queries on duplicated_post_id
        foreach ($posts as $post_id => $translation) {
            $lang = $translation->language_code;

            $original_default_attributes = get_post_meta($duplicated_post_id, '_default_attributes', TRUE);
            if(!empty($original_default_attributes)){
                $unserialized_default_attributes = maybe_unserialize($original_default_attributes);
                foreach($unserialized_default_attributes as $attribute => $default_term_slug){
                    // get the correct language
                    if (taxonomy_exists('pa_'.$attribute)) {
                        $default_term = get_term_by('slug', $default_term_slug, 'pa_'.$attribute);
                        $default_term_id = icl_object_id($default_term->term_id, 'pa_'.$attribute, false, $lang);

                        if($default_term_id){
                            $default_term = get_term_by('id', $default_term_id, 'pa_'.$attribute);
                            $unserialized_default_attributes[$attribute] = $default_term->slug;
                        } else {
                            // if it isn't translated - unset it
                            unset($unserialized_default_attributes[$attribute]);
                        }
                    }
                }

                $data = array('meta_value' => maybe_serialize($unserialized_default_attributes));
                $where = array('post_id' => $post_id, 'meta_key' => '_default_attributes');
                $wpdb->update($wpdb->postmeta, $data, $where);
            }

            //sync product categories and attributes
            $taxs = array();
            $updates = array();

            //product categories
            $terms = get_the_terms($duplicated_post_id, 'product_cat');
            if ($terms) {
                $taxs[] = 'product_cat';
                foreach ($terms as $term) {
                    $trid = $sitepress->get_element_trid($term->term_taxonomy_id, 'tax_product_cat');
                    if ($trid) {
                        $translations = $sitepress->get_element_translations($trid,'tax_product_cat');
                        if (isset($translations[$lang])) {
                            $updates['product_cat'][] = intval($translations[$lang]->term_id);
                        }
                    }
                }
            }

            //synchronize term data, postmeta (Jigoshop "global" product attributes and custom attributes)

            $taxonomies = get_post_meta($duplicated_post_id, 'product_attributes', true);
            if ($taxonomies) foreach ($taxonomies as $tax => $taxonomy) {
                if ($taxonomy['is_taxonomy']) { // Global product attribute
                    $tax = 'pa_'.$tax;
                    $taxs[] = $tax;
                    $updates[$tax] = array();
                    $terms = get_the_terms($duplicated_post_id, $tax);
                    if ($terms) foreach ($terms as $term) {
                        $trid = $sitepress->get_element_trid($term->term_taxonomy_id, 'tax_' . $tax);
                        if ($trid) {
                            $translations = $sitepress->get_element_translations($trid,'tax_' . $tax);
                            if (isset($translations[$lang])) {
                                $updates[$tax][] = intval($translations[$lang]->term_id);
                            }
                        }
                    }
                }
                else { //Custom product attribute
                }
            }

            // Sync terms for main product
            $taxs = array_unique($taxs);
            foreach ($taxs as $tax) {
                wp_set_object_terms($post_id, $updates[$tax], $tax);
            }

            // synchronize post variations
            if (has_term('variable','product_type',$duplicated_post_id)) {
                // synchronize post variations
                $get_all_post_variations = $wpdb->get_results("SELECT * FROM $wpdb->posts
                WHERE post_status = 'publish' AND post_type = 'product_variation' AND post_parent = '$duplicated_post_id' ORDER BY ID");

                $duplicated_post_variation_ids = array();
                foreach($get_all_post_variations as $k => $post_data){
                    $duplicated_post_variation_ids[] = $post_data->ID;
                }

                foreach($get_all_post_variations as $k => $post_data){
                    // Find if this has already been duplicated
                    $variation_id = $wpdb->get_var("SELECT post_id FROM $wpdb->postmeta
                        JOIN {$wpdb->prefix}icl_translations ON element_id = post_id AND element_type = 'post_product_variation' AND language_code = '$lang'
                        WHERE meta_key = '_wcml_duplicate_of_variation' AND meta_value = '$post_data->ID'");
                    if (!empty($variation_id)) {
                        // Update variation
                        wp_update_post(array(
                            'ID' => $variation_id,
                            'post_author' => $post_data->post_author,
                            'post_date_gmt' => $post_data->post_date_gmt,
                            'post_content' => $post_data->post_content,
                            'post_title' => $post_data->post_title,
                            'post_excerpt' => $post_data->post_excerpt,
                            'post_status' => $post_data->post_status,
                            'comment_status' => $post_data->comment_status,
                            'ping_status' => $post_data->ping_status,
                            'post_password' => $post_data->post_password,
                            'post_name' => $post_data->post_name,
                            'to_ping' => $post_data->to_ping,
                            'pinged' => $post_data->pinged,
                            'post_modified' => $post_data->post_modified,
                            'post_modified_gmt' => $post_data->post_modified_gmt,
                            'post_content_filtered' => $post_data->post_content_filtered,
                            'post_parent' => $post_id, // current post ID
                            'menu_order' => $post_data->menu_order,
                            'post_type' => $post_data->post_type,
                            'post_mime_type' => $post_data->post_mime_type,
                            'comment_count' => $post_data->comment_count
                        ));
                    } else {
                        // Add new variation
                        $guid = $post_data->guid;
                        $replaced_guid = str_replace($duplicated_post_id, $post_id, $guid);
                        $slug = $post_data->post_name;
                        $replaced_slug = str_replace($duplicated_post_id, $post_id, $slug);
                        $variation_id = wp_insert_post(array(
                            'post_author' => $post_data->post_author,
                            'post_date_gmt' => $post_data->post_date_gmt,
                            'post_content' => $post_data->post_content,
                            'post_title' => $post_data->post_title,
                            'post_excerpt' => $post_data->post_excerpt,
                            'post_status' => $post_data->post_status,
                            'comment_status' => $post_data->comment_status,
                            'ping_status' => $post_data->ping_status,
                            'post_password' => $post_data->post_password,
                            'post_name' => $replaced_slug,
                            'to_ping' => $post_data->to_ping,
                            'pinged' => $post_data->pinged,
                            'post_modified' => $post_data->post_modified,
                            'post_modified_gmt' => $post_data->post_modified_gmt,
                            'post_content_filtered' => $post_data->post_content_filtered,
                            'post_parent' => $post_id, // current post ID
                            'guid' => $replaced_guid,
                            'menu_order' => $post_data->menu_order,
                            'post_type' => $post_data->post_type,
                            'post_mime_type' => $post_data->post_mime_type,
                            'comment_count' => $post_data->comment_count
                        ));
                        update_post_meta($variation_id, '_wcml_duplicate_of_variation', $post_data->ID);
                        $trid = $sitepress->get_element_trid($post_data->ID, 'post_product_variation');
                        $sitepress->set_element_language_details($variation_id, 'post_product_variation', $trid, $lang, $language_details->source_language_code);
                    }
                }

                $get_current_post_variations = $wpdb->get_results("SELECT * FROM $wpdb->posts
                WHERE post_status = 'publish' AND post_type = 'product_variation' AND post_parent = '$post_id' ORDER BY ID");

                // Delete variations that no longer exist
                foreach ($get_current_post_variations as $post_data) {
                    $variation_id = get_post_meta($post_data->ID, '_wcml_duplicate_of_variation', true);
                    if (!in_array($variation_id, $duplicated_post_variation_ids)) {
                        wp_delete_post($variation_id, true);
                    }
                }

                // custom fields to copy
                $cf = (array)$sitepress_settings['translation-management']['custom_fields_translation'];

                // synchronize post variations post meta
                $current_post_variation_ids = array();
                foreach($get_current_post_variations as $k => $post_data){
                    $current_post_variation_ids[] = $post_data->ID;
                }

                foreach($duplicated_post_variation_ids as $dp_key => $duplicated_post_variation_id){
                    $get_all_post_meta = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE post_id = '$duplicated_post_variation_id'");

                    //error_log("DUP $dp_key => $duplicated_post_variation_id");

                    foreach($get_all_post_meta as $k => $post_meta){
                        $meta_key = $post_meta->meta_key;
                        $meta_value = $post_meta->meta_value;
                        // adjust the global attribute slug in the custom field
                        //error_log("$meta_key = ".var_export($meta_value,true));
                        $attid = null;
                        if ($meta_key == 'variation_data') {
                            $updates = array();
                            foreach (maybe_unserialize($meta_value) as $attr => $value) {
                                //error_log(" $attr => $value");
                                //if (substr($attr, 4) != 'tax_') continue;
                                $tax = 'pa_'.substr($attr, 4);
                                if (taxonomy_exists($tax)) {
                                    //global product attributes
                                    $attid = get_term_by('slug', $value, $tax)->term_taxonomy_id;
                                    $trid = $sitepress->get_element_trid($attid, 'tax_' . $tax);
                                    if ($trid) {
                                        $translations = $sitepress->get_element_translations($trid,'tax_' . $tax);
                                        if (isset($translations[$lang])) {
                                            $translated_value = $wpdb->get_var($wpdb->prepare("SELECT slug FROM $wpdb->terms WHERE term_id = %s", $translations[$lang]->term_id));
                                            $updates[$attr] = $translated_value;
                                        }
                                        //error_log("Tax $tax Value $translated_value");
                                    }
                                } else { //custom product attributes
                                    /*$sitepress->switch_lang($lang);
                                    $updates[$attr] = icl_t('jigoshop',$value.'_attribute_name',$value);
                                    error_log("$lang Custom $attr Value {$updates[$attr]}");
                                    $sitepress->switch_lang();*/
                                    $updates[$attr] = $value;
                                }
                            }
                            //error_log("new variation data for ".$current_post_variation_ids[$dp_key].": ".maybe_serialize($updates));
                            $meta_value = $updates;
                        }

                        // update current post variations meta
                        if ($meta_key == 'variation_data' || (isset($cf[$meta_key]) && $cf[$meta_key] == 1)) {
                            update_post_meta($current_post_variation_ids[$dp_key], $meta_key, $meta_value);
                        }
                        $thumb = get_post_meta($current_post_variation_ids[$dp_key], '_thumbnail_id');

                        if (empty($thumb)) {
                            //variations in Jigoshop must absolutely have this key
                            update_post_meta($current_post_variation_ids[$dp_key], '_thumbnail_id','');
                        }
                    }
               }
            }

        }
    }

    function update_post_meta($meta_id, $object_id, $meta_key, $_meta_value) {
        if ($meta_key == 'product_attributes' && is_array($_meta_value)) {
            foreach (maybe_unserialize($_meta_value) as $attr_slug => $attr) {
                //error_log("Attr post_meta $attr_slug =>".var_export($attr,true));
                if (isset($attr['value']) && is_string($attr['value'])) { //custom product attr.
                        // instead of pipe separated lists of values, Jigo has ',' separated lists
                        icl_register_string('jigoshop',ucfirst($attr['name']).'_attribute',$attr['name']);
                        foreach (explode(',',$attr['value']) as $val) {
                            $val = trim($val);
                            icl_register_string('jigoshop',ucfirst($val).'_attribute_name',$val);
                        }
                }
            }
        }
    }

    function attribute_value_custom($values,$attr) {
        $out = array();
        foreach (explode(',',$values) as $val) {
            $val = trim($val);
            $val = icl_t('jigoshop', $val .'_attribute_name', $val);
            $out[] = $val;
        }
        if (count($out) == 1)
            return $out[0];
        return wpautop(wptexturize(implode(", ", $out)));
    }

    function attribute_label ($label) {
        return icl_t('jigoshop',$label.'_attribute',$label);
    }

    function register_attribute_name($attribute_name,$attribute_label,$attribute_type) {
        icl_register_string('jigoshop',ucfirst($attribute_name).'_attribute',$attribute_name);
        icl_register_string('jigoshop',ucfirst($attribute_label).'_attribute',$attribute_label);

    }

    function delete_post_actions($post_id) {
        global $wpdb;
        $post = get_post($post_id);
        if ($post && $post->post_type == 'product') {
            //if (has_term('variable','product_type',$post_id))
            $variations = $wpdb->get_col("SELECT ID FROM $wpdb->posts
                WHERE post_status = 'publish' AND post_type = 'product_variation' AND post_parent = '$post_id'");
            //error_log('Vars to delete '.var_export($variations,true));
            if ($variations) foreach($variations as $id) wp_delete_post($id);
        }
    }

    function trash_post_actions($post_id) {
        global $wpdb;
        $post = get_post($post_id);
        if ($post && $post->post_type == 'product') {
            //if (has_term('variable','product_type',$post_id))
            $variations = $wpdb->get_col("SELECT ID FROM $wpdb->posts
                WHERE post_status = 'publish' AND post_type = 'product_variation' AND post_parent = '$post_id'");
            //error_log('Vars to trash '.var_export($variations,true));
            if ($variations) foreach($variations as $id) wp_trash_post($id);

        }
    }

    function untrashed_post_actions($post_id) {
        global $wpdb;
        $post = get_post($post_id);
        //error_log(__FUNCTION__);
        if ($post && $post->post_type == 'product') {
            //if (has_term('variable','product_type',$post_id))
            $variations = $wpdb->get_col("SELECT ID FROM $wpdb->posts
                WHERE post_status = 'trash' AND post_type = 'product_variation' AND post_parent = '$post_id'");
            //error_log('Vars to untrash '.var_export($variations,true));
            if ($variations) foreach($variations as $id) wp_untrash_post($id);
        }
    }


    function shop_page_query($q) {
        if (!$q->is_main_query()) return;
        $front_page_id = get_option('page_on_front');
        $shop_page_id = get_option('jigoshop_shop_page_id');
        $shop_page = get_post( jigoshop_get_page_id('shop') );

        if (!empty($shop_page) && $q->get('page_id') !== $front_page_id && $shop_page_id == $q->get('page_id')) {

            $q->set( 'post_type', 'product' );
            $q->set( 'page_id', '' );
            if ( isset( $q->query['paged'] ) )
                $q->set( 'paged', $q->query['paged'] );

            // Get the actual WP page to avoid errors
            // This is hacky but works. Awaiting http://core.trac.wordpress.org/ticket/21096
            global $wp_post_types;

            $q->is_page = true;

            $wp_post_types['product']->ID           = $shop_page->ID;
            $wp_post_types['product']->post_title   = $shop_page->post_title;
            $wp_post_types['product']->post_name    = $shop_page->post_name;

            // Fix conditional functions
            $q->is_singular = false;
            $q->is_post_type_archive = true;
            $q->is_archive = true;
            $q->queried_object = get_post_type_object('product');
        }
    }

    function adjust_shop_page($q) {
        global $sitepress;
        if ($sitepress->get_default_language() != $sitepress->get_current_language()) {
            if (!empty($q->query_vars['pagename'])) {
                $shop_page = get_post( jigoshop_get_page_id('shop') );
                if ($shop_page->post_name == $q->query_vars['pagename']) {
                    unset($q->query_vars['page']);
                    unset($q->query_vars['pagename']);
                    $q->query_vars['post_type'] = 'product';
                }
            }
        }
    }

    function translate_ls_shop_url($languages) {
        global $sitepress;
        $shop_id = get_option('jigoshop_shop_page_id');
        $front_id = icl_object_id(get_option('page_on_front'), 'page');
        if (is_post_type_archive('product')) {
            foreach ($languages as &$language) {
                if ($front_id == $shop_id) {
                    $url = $sitepress->language_url($language['language_code']);
                } else {
                    $url = get_permalink(icl_object_id($shop_id, 'page', true, $language['language_code']));
                }
                $language['url'] = $url;
            }
        }
        return $languages;
    }

    // Catch the default slugs for translation
    function default_slug_translation($translation, $text, $context, $domain) {
        if ($context == 'slug') {
            // taxonomy slug translation is not ready yet, return no translation
            if ($text == 'product-category' || $text == 'product-tag') {
                    return $text;
            }
            // re-request translation through URL slug context to trigger slug translation
            return _x($text, 'URL slug', $domain);
        }
        return $translation;
    }

    //Display product title in cart in the current language
    function product_title($title,$product) {
        global $sitepress;
        $post = $product->get_post_data();
        $product_id = icl_object_id($post->ID,'product',true,$sitepress->get_current_language());
        return get_the_title($product_id);
    }

    //Restore the translation column after it is dumped by Jigo
    function edit_product_columns($columns) {
        global $sitepress;
        $columns = $sitepress->add_posts_management_column($columns);
        return $columns;
    }
}

?>
