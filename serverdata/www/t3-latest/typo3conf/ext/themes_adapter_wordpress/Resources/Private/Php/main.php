<?php

$_GET['page_id'] = '1212';
$_GET['pagename'] = 'fake';

include(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/main.functions.php');

$GLOBALS['wpdb']       = new wpdb('wpdb');
$GLOBALS['wp_rewrite'] = new mock('wp_rewrite');
$GLOBALS['wp_styles']  = new mock('wp_styles');

include(t3lib_extMgm::extPath('themes_adapter_wordpress') . 'Resources/Private/Php/main.includes.php');

$config = new mock('PageObject');
$config->post_type      = 'page';
$config->post_content   = '###CONTENT###';
$config->post_title     = '###TITLE###';
$config->post_excerpt   = 'Excerpt';
$config->comment_status = 'closed';
$config->ping_status    = 'closed';
$config->post_name      = '###POSTNAME###';
$config->ID             = 5;


$GLOBALS['post'] = new WP_Post(
	$config
);





if ( TEMPLATEPATH !== STYLESHEETPATH && file_exists( STYLESHEETPATH . '/functions.php' ) )
	include( STYLESHEETPATH . '/functions.php' );
if ( file_exists( TEMPLATEPATH . '/functions.php' ) )
	include( TEMPLATEPATH . '/functions.php' );

do_action('after_setup_theme');

/**
 * @return string
 */
#function get_template_directory_uri() {
#	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
#	$basePath  = $wpAdapter->confEvaluated['path'];
#	return $basePath;
#}
