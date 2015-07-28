<?php
function tungnguyen_form_system_theme_settings_alter(&$form, &$form_state) 
{
	$form['social'] = array (
		'#type'		=> 'fieldset',
		'#title'		=> 'Social setting',
		'#collapsible'	=> true,
		'#collapsed'	=> false,
	);
	$form['social']['social_display'] = array(
		'#type'		=> 'checkbox',
		'#title'		=> 'Dispaly social icon',
		'#default_value'	=> theme_get_setting('social_display', 'tungnguyen'),
		'#description'	=> 'Checked this option to show social icon.',
	);
	$form['social']['facebook_url'] = array(
		'#type'		=> 'textfield',
		'#title'		=> 'Facebook Url',
		'#default_value'	=> theme_get_setting('facebook_url', 'tungnguyen'),
		'#description'	=> 'Enter facebook url',
	);
	$form['social']['twitter_url'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'Twitter Url',
			'#default_value'	=> theme_get_setting('twitter_url', 'tungnguyen'),
			'#description'	=> 'Enter Twitter url',
	);
	$form['social']['googleplus_url'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'googleplus Url',
			'#default_value'	=> theme_get_setting('googleplus_url', 'tungnguyen'),
			'#description'	=> 'Enter google plus url',
	);
	$form['social']['cm_url'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'CM Url',
			'#default_value'	=> theme_get_setting('cm_url', 'tungnguyen'),
			'#description'	=> 'Enter CM url',
	);
	
	$form['book_room_url'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'Book room url',
			'#default_value'	=> theme_get_setting('book_room_url', 'tungnguyen'),
			'#description'	=> 'This is url for user book room.',
	);
	$form['red_dragon_url'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'Red Dragon Hotel url',
			'#default_value'	=> theme_get_setting('red_dragon_url', 'tungnguyen'),
			'#description'	=> 'This is url for Red Dragon hotel.',
	);
	$form['google_api_key'] = array(
			'#type'		=> 'textfield',
			'#title'		=> 'Google API Key',
			'#default_value'	=> theme_get_setting('google_api_key', 'tungnguyen'),
			'#description'	=> 'Google API Key.',
	);
}