<?php


class mock {
	function __construct($name) {
		$this->name = $name;
	}
	function __call($name, $params) {
		trigger_error('IGNORED CALL' . $this->name . ' . ' . $name . '-' . json_encode($params));
		#echo '<br><pre>' . $this->name . ' . ' . $name . '-' . json_encode($params) . '</pre><br>';
		return $this;
	}
	function __toString() {
		return '';
	}
}

class WP_THEME extends mock {

}
class wpdb extends mock{
	function prepare($query, $params) {
		$this->query($query);
		return $this;
	}
	function get_row($query, $output_type='OBJECT', $row_offset=0) {
		switch($output_type) {
			case 'ARRAY_A':
			case 'ARRAY_N':
				return array();
			break;
			default:
				return new mock($this->name, $query);
			break;
		}
	}
	function select($query) {
		#$this->__call('SELECT!!!', $query);
		return $this->get_row($query);
	}
	function query($query) {
		$this->select($query);
	}
}



function timer_stop() {

}


function have_posts() {
	return TRUE;
}

function current_user_can($right) {
	return FALSE;
}

function add_action($action, $function) {
	global $wordPress;
	$wordPress['actions'][$action][] = $function;
}

/**
 * @param $action
 */
function do_action($action) {
	global $wordPress;

	if(array_key_exists($action, $wordPress['actions'])) {
		foreach($wordPress['actions'][$action] as $action) {
			call_user_func($action);
		}
	}
}
function remove_action($string, $array) {

}

function apply_filters($tag, $value) {
	return $value;
	// @todo implement hooks
}

function body_class() {
	// @todo return correct header class
	echo '';
}

function get_option($name, $default = '') {
	switch($name) {
		case 'home':
			return '---';
			break;
		case 'html_type':
			return 'html5';
			break;
		case 'blog_charset':
			return 'utf-8';
			break;
		case 'blogname':
			return '@todo sitename from template';
			break;
		case 'stylesheet':
			$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
			return $wpAdapter->confEvaluated['themeName'];
			break;
		case 'siteurl':
			return '';
			break;
		case 'blogdescription':
			return '';
			break;
		case 'date_format':
			return 'd.m.Y H:i:s';
			break;
		case 'users_can_register':
			return FALSE;
			break;
		case 'template':
			$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
			return $wpAdapter->confEvaluated['themeName'];
			break;
		default:
			#throw new Exception('call for undefined get_option: ' . $name);
	}
}

function the_post() {
	return new mock('post');
	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
	return $wpAdapter->confEvaluated['mainColumn'];
}

function get_default_feed() {
	return '';
}
function get_feed_permastruct() {
	return '';
}

function is_multisite() {
	return FALSE;
}

function get_query_var($var) {
	return t3lib_div::_GP($var);
}

function is_single(){
	return TRUE;
}

function get_queried_object() {
	return new mock('get_queried_object');
}
function is_category() {
	return FALSE;
}
function is_tag() {
	return FALSE;
}
function is_tax() {
	return FALSE;
}
function is_author() {
	return FALSE;
}
function is_post_type_archive() {
	return FALSE;
}
function is_archive() {
	return FALSE;
}
function is_search() {
	return FALSE;
}
function is_404() {
	return FALSE;
}
function is_singular() {
	return TRUE;
}

function is_day() {
	return FALSE;
}

function is_month() {
	return FALSE;
}
function is_year() {
	return FALSE;
}
function is_paged() {
	return FALSE;
}
function is_home() {
	return TRUE;
}
function is_page() {
	return TRUE;
}
function is_user_logged_in() {
	return FALSE;
}

function wp_list_bookmarks() {
	return '';
}
function wp_list_pages() {
	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
	echo $wpAdapter->confEvaluated['menu'];
}
function wp_nav_menu($options) {
	echo '<ul class="menu">';
	wp_list_pages();
	echo '</ul>';
}
function the_ID() {
	return 0;
}
function wp_list_categories() {
	return '';
}

function wp_cache_get($key, $categorie) {
	return FALSE;
}

function wp_cache_set($key) {
	return FALSE;
}
function wp_cache_add($key) {
	return false;
}

function wp_kses_normalize_entities() {

}
function wp_kses_bad_protocol() {

}
function add_filter() {

}
function register_nav_menus() {

}


function is_admin() {
	return FALSE;
}
function is_attachment() {
	return FALSE;
}
function set_post_thumbnail_size() {

}
function post_class() {
	return new mock('post_class');
}

function the_title() {
	return get_option('blog_name');
}
function the_content() {
	return 'THECONTENT';
}
function wp_link_pages() {

}
function dynamic_sidebar($index = 1) {
	return TRUE;
}
function has_nav_menu() {
	return FALSE;
}
function wp_enqueue_style($name, $file) {
	$GLOBALS['TSFE']->additionalHeaderData['themes-' . $name] = '
        <link rel="stylesheet" href="'.$file.'" type="text/css" />
        ';
}
function register_nav_menu() {

}
function is_active_sidebar() {

}
function wp_load_alloptions() {

}
function wp_enqueue_script($name, $file = '', $libs = NULL, $fileTime = 0) {
	$GLOBALS['TSFE']->additionalHeaderData['script-themes-' . $name] = '
        <script src="'.$file.'?' . $fileTime  . '" type="text/javascript" ></script>
        ';
}

function headCallback() {
	do_action('wp_enqueue_scripts');
}
add_action('wp_head', 'headCallback');

function comments_open() {

}

function get_the_ID() {
	return FALSE;
}
function the_post_thumbnail() {
	return false;
}
function get_the_category_list() {
	return false;
}
function get_the_tag_list() {
	return new mock('tag_list');
}
function get_author_posts_url() {
	return '';
}
function get_the_author_meta() {
	return new mock('author_meta');
}
function get_the_author() {
	return new mock('get_the_author');
}
function is_multi_author() {
	return false;
}
function get_metadata() {
	return new mock('metadata');
}
function get_the_title() {
	return 'dada ich bin der title';
}
function the_title_attribute() {
	return new mock('the_title_attribute');
}
function get_comments_number() {
	return 0;
}