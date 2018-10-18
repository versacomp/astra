<?php
/**
 * Easy Digital Downloads Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2018, Astra
 * @link        https://wpastra.com/
 * @since       Astra x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Edd_Archive_Layout_Configs' ) ) {

	/**
	 * Customizer Sanitizes Initial setup
	 */
	class Astra_Edd_Archive_Layout_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Astra-Easy Digital Downloads Shop Layout Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since x.x.x
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_configs = array(

				/**
				 * Option: Shop Columns
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[edd-archive-grids]',
					'type'        => 'control',
					'control'     => 'ast-responsive-slider',
					'section'     => 'section-edd-archive',
					'default'     => array(
						'desktop' => 4,
						'tablet'  => 3,
						'mobile'  => 2,
					),
					'priority'    => 10,
					'title'       => __( 'Archive Columns', 'astra' ),
					'input_attrs' => array(
						'step' => 1,
						'min'  => 1,
						'max'  => 6,
					),
				),

				/**
				 * Option: Single Post Meta
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[edd-archive-product-structure]',
					'type'     => 'control',
					'control'  => 'ast-sortable',
					'section'  => 'section-edd-archive',
					'default'  => astra_get_option( 'edd-archive-product-structure' ),
					'priority' => 30,
					'title'    => __( 'Product Structure', 'astra' ),
					'choices'  => array(
						'image'      => __( 'Image', 'astra' ),
						'title'      => __( 'Title', 'astra' ),
						'price'      => __( 'Price', 'astra' ),
						'ratings'    => __( 'Ratings', 'astra' ),
						'short_desc' => __( 'Short Description', 'astra' ),
						'add_cart'   => __( 'Add To Cart', 'astra' ),
						'category'   => __( 'Category', 'astra' ),
					),
				),

				/**
				 * Option: Easy Digital Downloads Shop Archive Content Divider
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[edd-archive-width-divider]',
					'type'     => 'control',
					'control'  => 'ast-divider',
					'section'  => 'section-edd-archive',
					'priority' => 220,
					'settings' => array(),
				),

				/**
				 * Option: Archive Content Width
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[edd-archive-width]',
					'type'     => 'control',
					'control'  => 'select',
					'section'  => 'section-edd-archive',
					'default'  => astra_get_option( 'edd-archive-width' ),
					'priority' => 220,
					'title'    => __( 'Archive Content Width', 'astra' ),
					'choices'  => array(
						'default' => __( 'Default', 'astra' ),
						'custom'  => __( 'Custom', 'astra' ),
					),
				),

				/**
				 * Option: Enter Width
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[edd-archive-max-width]',
					'type'        => 'control',
					'control'     => 'ast-slider',
					'section'     => 'section-edd-archive',
					'default'     => 1200,
					'priority'    => 225,
					'required'    => array( ASTRA_THEME_SETTINGS . '[edd-archive-width]', '===', 'custom' ),
					'title'       => __( 'Enter Width', 'astra' ),
					'suffix'      => '',
					'input_attrs' => array(
						'min'  => 768,
						'step' => 1,
						'max'  => 1920,
					),
				),
			);

			$configurations = array_merge( $configurations, $_configs );

			return $configurations;

		}
	}
}

new Astra_Edd_Archive_Layout_Configs;
