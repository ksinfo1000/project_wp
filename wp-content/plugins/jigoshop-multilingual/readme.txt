=== JigoShop Multilingual - run JigoShop with WPML ===
Contributors: AmirHelzer, dominykasgel, dgwatkins, adelval
Donate link: http://wp-types.com
Tags: CMS, jigoshop, commerce, ecommerce, e-commerce, products, WPML, multilingual, e-shop, shop
Requires at least: 3.0
Tested up to: 3.5.2
Stable tag: 1.1
Version: 1.1

Allows running multilingual e-commerce sites using JigoShop and WPML.

== Description ==

This 'glue' plugin makes it possible to run fully multilingual e-commerce sites using JigoShop and WPML. You'll be able to translate pages, products, categories, attributes, tags, and the text of JigoShop plugin and your WordPress theme.

= Features =

* Makes your site fully multilingual
* Makes languages persist through the checkout process
* Sends emails to clients and admins in their selected language
* Collapses all products to the default language for inventory tracking and shipping

= Documentation =

Please go to [JigoShop Multilingual Doc](http://wpml.org/documentation/related-projects/jigoshop-multilingual/) page. You'll find instructions for translating the shop pages, the products and the texts.

= Downloads =

You will need:

* [JigoShop](http://wordpress.org/extend/plugins/jigoshop/) version 1.1.1 and up - the actual e-commerce plugin (free)
* [WPML](http://wpml.org) version 2.4.2 and up - the multilingual WordPress plugin (costs $79)

== Installation ==

1. Upload 'jigoshop-multilingual' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Translate the shop pages

== Frequently Asked Questions ==

= Does this work with other e-commerce plugins? =

No. This plugin is tailored for JigoShop.

== Screenshots ==

1. Translation controls for products

2. Product categories translation

3. Language selector

== Changelog ==

= 1.1 =

* Updated tutorial
* Synchronize product categories, attributes, and variations: they are now translatable and kept in sync.
* Synchronize product_type
* Register taxonomy names for global product attributes.
* Register custom product attribute names and values for string translation (can benefit from Jigoshop patch).
* Both global and custom attribute values are translated in the front-end.
* Global attribute values are also translated in the back-end.
* Fix: translate shipping methods title (requires Jigoshop patch)
* Fix: translate payment gateway in checkout and thank you pages (requires patch)
* Fix: Various fixes in urls for store pages and products.
* Fix: 'Return to shop' and 'Continue shopping' buttons.
* Fix: product displayed in correct language in cart, orders, and mails
* Fix: correct urls for products in cart page
* Fix: translation controls in product list page
* Fix: language header links in taxonomy pages (product categories, tags, and attributes) are no longer hidden after saving a translated term with the language-as-directories option
* Fix: wp_trash_post, wp_untrash_post and delete_post actions for product_variations when applied to parent variable product

= 1.0 =
* Bug fixes:
* Variable product after duplication looses its type
* Translated text doesn't appear on the checkout page
* Remove several PHP notices
* Redirect loop on the checkout page when the cart is empty
* Fixed the stock issue for translations
* Improvements:
* Payment gateways titles and descriptions now are translatable

= 0.9 =
* First release
