<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

	/**
	 *  GeneriCX - logo upload
	 */

	$wp_customize->add_section( 'genericx_logo_section' , array(
		'title'       => __( 'Logo', 'genericx' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'genericx_logo' );
	$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'genericx_logo', array(
    'label'    => __( 'Logo Image', 'genericx' ),
    'section'  => 'genericx_logo_section',
    'settings' => 'genericx_logo',
	) ) );

	$wp_customize->add_setting( 'genericx_logo_height' );
	$wp_customize->add_control( new \WP_Customize_Control( 
			$wp_customize, 'genericx_logo_height', 
			array(
    		'label'    => __( 'Logo Height', 'genericx' ),
    		'section'  => 'genericx_logo_section',
    		'settings' => 'genericx_logo_height',
    		'type'     => 'number'
			) 
		) 
	);



}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');




