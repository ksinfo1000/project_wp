<?php
/**
 * Plugin Name.
 *
 * @package   Menu_Cusomizer
 * @author    Liondekam <info@crumina.net>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */

/**
 * Plugin class.
 *
 *
 * @package Menu_Cusomizer
 * @author  Liondekam <info@crumina.net>
 */

class Crumina_Metro_Nav_Menu extends Walker_Nav_Menu {

    private $crum_menu_data;

    var $item_id = 0;

    public function __construct($id = 0)
    {

        $this->crum_menu_data = get_option("crumina_menu_data");
        $this->item_id = $id;
    }

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];

        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

// add classes to ul sub-menus
    function start_lvl( &$output, $depth ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }



// add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {

        if ($this->item_id) {

            $slug_menu = $this->item_id;

        } else {

            $crumina_menu_locations = (array) get_nav_menu_locations();

            $crumina_menu = get_term_by( 'id', (int) $crumina_menu_locations[ 'primary_navigation' ], 'nav_menu', ARRAY_A );

            $slug_menu = $crumina_menu[ 'slug' ];
        }


        $menu_settings = get_option('crumina_menu_data');

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        $class_names = in_array("current_page_item",$item->classes) ? ' active ' : '';

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >= 2 ? 'sub-sub-menu-item' : '' ),
            ( $depth  % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );


        // build html

        if ($args->has_children) {
            $class_names .= 'has-submenu';
        } else {
            $class_names .="";
        }
        if (($depth == 0) && ($menu_settings)) {
            $item_size = $menu_settings[$slug_menu]['item_size'] ? $menu_settings[$slug_menu]['item_size']: '';
            if ($item_size) {
                $item_width = 'style = "width:'.$item_size.'px;"';
            } else {
                $item_width = '';
            }
        }

        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="metro-menu-item ' . $depth_class_names . ' ' . $class_names . '" '.$item_width.'>';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';


        if ($depth == 0) {

            $menu_id = $item->ID;

            if ($menu_settings){
                $menu_bg_color = (isset($menu_settings[$slug_menu][$menu_id]['bg_color'])) ? $menu_settings[$slug_menu][$menu_id]['bg_color'] : '';
                $menu_bg_image = (isset($menu_settings[$slug_menu][$menu_id]['bg_image'])) ? $menu_settings[$slug_menu][$menu_id]['bg_image'] : '';
                $menu_icon = (isset($menu_settings[$slug_menu][$menu_id]['icon'])) ? $menu_settings[$slug_menu][$menu_id]['icon'] : '';
                $item_size = $menu_settings[$slug_menu]['item_size'] ? $menu_settings[$slug_menu]['item_size']: '';
            }

            $tile_styles = '';

            if ($item_size) {
                $tile_styles .= ' height:'.$item_size.'px;';
            }

            if($menu_bg_color) {
                $tile_styles .= ' background-color:'.$menu_bg_color.';';
            }
            if($menu_bg_image) {
                $tile_styles .= ' background-image: url('.$menu_bg_image.');';
            }
            if($menu_icon) {
                $menu_icon_show = ' <i class="tile-icon '.$menu_icon.' "></i>';
            } else {
                $menu_icon_show = '';
            };



            $item_output = sprintf( '%1$s<a%2$s>',
                $args->before,
                $attributes
            );

            $item_output .= sprintf( '<span class="menu-tile" style="%1s">%2s</span><span class="item-title">%3s</span>',
                $tile_styles,
                $menu_icon_show,
                apply_filters( 'the_title', $item->title, $item->ID )
            );

            $item_output .= sprintf( '</a>%1$s',
                $args->after
            );

        } else {
            $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters( 'the_title', $item->title, $item->ID ),
                $args->link_after,
                $args->after
            );
        }




        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}