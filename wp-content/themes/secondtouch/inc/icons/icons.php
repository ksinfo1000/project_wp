<?php

	/*	
	*	---------------------------------------------------------------------
	*	Compatibility mode
	*	Set to TRUE to enable compatibility mode - [v_icon]
	*	--------------------------------------------------------------------- 
	*/

	define( 'VI_SAFE_MODE', apply_filters( 'vi_safe_mode', FALSE ) );
	
	
	/* Setup perfix */
	function crum_i_compatibility_mode() {
		$prefix = ( VI_SAFE_MODE == true ) ? 'v_' : '';
		return $prefix;
	}

	

	/*	
	*	---------------------------------------------------------------------
	*	Setup plugin
	*	--------------------------------------------------------------------- 
	*/
		
	function crum_i_plugin_init() {

		wp_register_style( 'icon-font-style', get_template_directory_uri() . '/inc/icons/css/icon-font-style.css', false, '', 'all' );
		wp_register_style( 'mnky-icon-generator', get_template_directory_uri() . '/inc/icons/css/generator.css', false, '', 'all' );
		wp_register_script( 'mnky-icon-generator', get_template_directory_uri() . '/inc/icons/js/generator.js', array( 'jquery' ), '', false );

		if ( !is_admin() ) {
		
			wp_enqueue_style( 'icon-font-style' );
			
		} elseif ( is_admin() ) {
		
			wp_enqueue_style( 'icon-font-style' );
		


				wp_enqueue_style( 'thickbox' );
				wp_enqueue_style( 'farbtastic' );
				wp_enqueue_style( 'mnky-icon-generator' );	
				

				wp_enqueue_script( 'jquery' );
				wp_enqueue_script( 'thickbox' );
				wp_enqueue_script( 'farbtastic' );		
				wp_enqueue_script( 'mnky-icon-generator' );

		}
	}
	
	add_action( 'init', 'crum_i_plugin_init' );
	
	

	/*	
	*	---------------------------------------------------------------------
	*	Plugin URL
	*	--------------------------------------------------------------------- 
	*/
	
	function crum_i_plugin_url() {
		return locate_template('/inc/icons/icons.php');
    }

	/*
	*	---------------------------------------------------------------------
	*	Icon generator box
	*	---------------------------------------------------------------------
	*/

	function crum_i_generator() {

		include_once 'inc/list.php'; ?>
		<div id="mnky-generator-overlay" class="mnky-overlay-bg" style="display:none"></div>
		<div id="mnky-generator-wrap" style="display:none">
			<div id="mnky-generator">
				<a href="#" id="mnky-generator-close"><span class="mnky-close-icon"></span></a>
				<div id="mnky-generator-shell">

					<table border="0">
						<tr>
							<td class="generator-title">
								<span>Icon pack:</span>
							</td>
							<td>
								<select name="icon-pack" id="mnky-generator-select-pack">
                                    <option value="linecons-icon-list">Linecons icons</option>
								   <option value="moon-icons-list">Moon icons</option>
								</select>
							</td>
						</tr>
					</table>
					
					<div class="mnky-generator-icon-select">

                        <ul class="linecons-icon-list">
                            <?php
                            foreach ( $crum_i_icon_list['linecons'] as $linecons_icon ) {
                                $selected_icon = ( 'linecons-adjust' == $linecons_icon ) ? ' checked' : '';
                                echo '<li><input name="name" type="radio" value="' . $linecons_icon . '" id="' . $linecons_icon . '" '. $selected_icon .' ><label for="' . $linecons_icon . '"><i class="' . $linecons_icon . '"></i></label></li>';
                            }
                            ?>
                        </ul>
						<ul class="moon-icon-list" style="display:none">
						<?php 
						foreach ( $crum_i_icon_list['moon'] as $moon_icon ) {
							echo '<li><input name="name" type="radio" value="' . $moon_icon . '" id="' . $moon_icon . '"><label for="' . $moon_icon . '"><i class="' . $moon_icon . '"></i></label></li>';
						} 
						?>
						</ul>
					</div>

					<input name="mnky-generator-insert" type="submit" class="button button-primary button-large" id="mnky-generator-insert" value="Insert Icon">
				</div>
			</div>
		</div>
		
	<?php
	}

	add_action( 'admin_footer', 'crum_i_generator' );

?>