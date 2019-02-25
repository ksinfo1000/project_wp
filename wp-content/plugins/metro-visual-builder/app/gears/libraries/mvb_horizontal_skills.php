<?php

class MVB_Horizontal_Skills
{
    /**
	 * The modules settings
	 *
	 * @access public
	 * @param none
	 * @return array settings
	 */

    public static function settings()
    {
        return array(
            'title'           =>      __('Horizontal skills', 'mvb'),
            'description'     =>      __('Add a skills section', 'mvb'),
            'identifier'      =>      __CLASS__,
            'icon'            =>      'appbar.graph.bar.png',
            'section'         =>      'presentation',
            'color'           =>      'gray'
        );
    }//end settings()

    /**
	 * The shortcodes attributes with the field options
	 *
	 * @access private
	 * @param array $atts
	 * @return shortcode output
	 */

    public static function fields()
    {
        global $mvb_metro_factory;

        $the_fields = array(
            'main_title' => array(
                'type'      =>      'text',
                'label'     =>      __('Title', 'mvb'),
            ),

            'start_label' => array(
                'type'      =>      'text',
                'label'     =>      __('Start point label', 'mvb'),
                'col_span'  =>      'lbl_half'
            ),
            'finish_label' => array(
                'type'      =>      'text',
                'label'     =>      __('Finish point label', 'mvb'),
                'col_span'  =>      'lbl_half'
            ),

            'skill' => array(
                'type'      =>      'repeater',
                'button'    =>      __('Add skill', 'mvb'),
                'label'     =>      __('Skill', 'mvb'),
                'lbl_d'     =>      __('Skill Title', 'mvb'),
                'fields'    =>      array(
                    'skill_title' => array(
                        'type'      =>      'text',
                        's_title'   =>      TRUE,
                        'label'     =>      __('Skill Title', 'mvb'),
                        'col_span'  =>      'lbl_half'
                    ),
                    'skill_subtitle' => array(
                        'type'      =>      'text',
                        'label'     =>      __('Skill Subitle', 'mvb'),
                        'col_span'  =>      'lbl_half'
                    ),

                    'skill_percent' => array(
                        'type'      =>      'text',
                        'label'     =>      __('Skill percent', 'mvb'),
                        'col_span'  =>      'lbl_third'
                    ),

                    'skill_color' => array(
                        'type'      =>      'select',
                        'label'     =>      __('Skill align', 'mvb'),
                        'options'   =>      crum_get_align(),
                        'col_span'  =>      'lbl_third'
                    ),

                    'skill_position' => array(
                        'type'      =>      'select',
                        'label'     =>      __('Skill position', 'mvb'),
                        'options'   =>      crum_get_position(),
                        'col_span'  =>      'lbl_third'
                    ),
                )//end repeater_fields
            ),

            'separator-effects' => array('type'     =>  'separator'),

            'effects' => array(
                'type'      =>      'select',
                'label'     =>      __('Appear effects', 'mvb'),
                'help'      =>      __('Select one of appear effects for block', 'mvb'),
                'default'   =>      0,
                'options'   =>      crum_appear_effects(),
                'col_span'  =>      'lbl_half'
            ),

            'css' => array(
                'type'      =>      'text',
                'label'     =>      __('Additional CSS classes', 'mvb'),
                'help'      =>      __('Separated by space', 'mvb'),
                'col_span'  =>      'lbl_half'
            ),
        );

        return $the_fields;
    }//end fields();


    /**
	 * The private code for the shortcode. used in the custom editor
	 *
	 * @access public
	 * @param array $atts
	 * @return shortcode output
	 */

    public static function admin_render( $atts = array(), $content = '' )
    {
        global $mvb_metro_factory;
        global $mvb_metro_form_builder;
        $form_fields = self::fields();

        $load = shortcode_atts( $mvb_metro_factory->defaults($form_fields), $atts );
        $load['content'] = $content;

        if( $mvb_metro_factory->show_pill_sc OR $mvb_metro_factory->show_pill_sc_column )
        {
            if( method_exists(__CLASS__, 'the_pill') )
            {
                return self::the_pill($load, self::settings());
            }
            else
            {
                return $mvb_metro_factory->the_pill($load, self::settings());
            }

        }
        else
        {
            $load['content'] = $mvb_metro_factory->do_repeater_shortcode($content);

            $load['form_fields_html'] = $mvb_metro_form_builder->build_form($form_fields, $load);
            $load['settings'] = self::settings();
            $load['form_fields'] = $form_fields;
            $load['module_action'] = $mvb_metro_factory->module_action;

            return $mvb_metro_factory->_load_view('html/private/mvb_form.php', $load);
        }//endif

    }//end admin_render();

    /**
	 * The private code for the repeater shortcode. used in the custom editor
	 *
	 * @access public
	 * @param array $atts
	 * @return shortcode output
	 */

    public static function repeater_admin_render( $atts = array(), $content = '' )
    {
        global $__metro_core;

        if( !isset($atts['sh_keys']) OR trim($atts['sh_keys']) == '' )
            return;

        $keys = explode(",", $atts['sh_keys']);
        $tmp = array();

        foreach( $keys as $key )
        {
            $tmp[$key] = $atts[$key];
        }//endforeach;

        $__metro_core->sh_tmp_repeater[] = $tmp;
    }//end repeater_admin_render();

    public static function repeater_render( $atts = array(), $content = '' )
    {
        global $mvb_metro_factory;
        self::repeater_admin_render($atts, $content = '');
    }//end repeater_render()

    /**
	 * The public code for the shortcode
	 *
	 * @access public
	 * @param array $atts
	 * @return shortcode output
	 */
    public static function render( $atts, $content = null )
    {
        global $mvb_metro_factory;

        $load = $atts;

        $load['r_items'] = $mvb_metro_factory->do_repeater_shortcode($content);


        return $mvb_metro_factory->_load_view('html/public/mvb_horizontal_skills.php', $load);
    }//end render();
}//end class