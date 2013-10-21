<?php

/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */

include_once('acf/advanced-custom-fields/acf.php');

// Add-ons 
// include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
include_once( 'acf/add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_the-granary-option-page',
		'title' => 'The Granary Option Page',
		'fields' => array (
			array (
				'key' => 'field_52656a551e727',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52656a701e729',
				'label' => 'Footer Text',
				'name' => 'footer_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_52656a601e728',
				'label' => 'Social Media Icons',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52656a9b1e72b',
				'label' => 'Instruction',
				'name' => '',
				'type' => 'message',
				'message' => 'Icons will display in the front end if URLs are populated. Please includ https:// or http://',
			),
			array (
				'key' => 'field_52656a7e1e72a',
				'label' => 'Facebook URL',
				'name' => 'facebook_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52656aca1e72c',
				'label' => 'Twitter URL',
				'name' => 'twitter_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52656ad61e72d',
				'label' => 'LinkedIn URL',
				'name' => 'linkedin_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
