<?php

define('THEME_JS', get_template_directory_uri() . '/js');
define('THEME_NONCE', '_acp');


// Подключаем стили
add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles(){
	wp_enqueue_style('fancybox',  get_template_directory_uri()  . '/libs/css/fancybox.css', [], null );
}

// Подключаем скрипты
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/libs/js/jquery-3.2.1.min.js', [], '3.2.1', true);
    wp_enqueue_script('jquery');

	wp_enqueue_script('fancybox', get_template_directory_uri()  . '/libs/js/fancybox.umd.js', [], null, true);

}


add_action('after_setup_theme', function () {
	register_nav_menu('mainMenu', 'Главное меню');
	register_nav_menu('footerMenu', 'Меню в подвале');
	register_nav_menu('gallaryMenu', 'Меню фотогалереи');
});



add_action('init', function () {
		register_post_type('gallary', [
				'labels' => [
						'name'               => 'Галерея',
						'singular_name'      => 'Галерея',
						'add_new'            => 'Добавить',
						'add_new_item'       => 'Добавить запись',
						'edit_item'          => 'Редактировать запись',
						'new_item'           => 'Новая запись',
						'view_item'          => 'Просмотреть запись',
						'search_items'       => 'Поиск записи',
						'not_found'          => 'Запись не найдена',
						'not_found_in_trash' => 'Запись не найдена в удалённых',
						'parent_item_colon'  => '',
						'menu_name'          => 'Галерея'
				],
				'public' => true,
				'has_archive' => true,
				'rewrite' => [
						'with_front' => true
				]
		]);
});

add_action('init', function () {
	register_post_type('photos', [
			'labels' => [
					'name'               => 'ГалереяФото',
					'singular_name'      => 'ГалереяФото',
					'add_new'            => 'Добавить',
					'add_new_item'       => 'Добавить запись',
					'edit_item'          => 'Редактировать запись',
					'new_item'           => 'Новая запись',
					'view_item'          => 'Просмотреть запись',
					'search_items'       => 'Поиск записи',
					'not_found'          => 'Запись не найдена',
					'not_found_in_trash' => 'Запись не найдена в удалённых',
					'parent_item_colon'  => '',
					'menu_name'          => 'ГалереяФото'
			],
			'public' => true,
			'has_archive' => true,
			'rewrite' => [
					'with_front' => true
			],
	]);
	register_taxonomy('photos-mark', ['photos'], [
		'labels' => [
			'name' => 'Метка'
		],
		'public' => true,
		'rewrite' => [
			'with_front' => false
		]
	]);

});

/*
	* Start custom menu  
	* https://carlofontanos.com/auto-generate-nav-menus-on-theme-activation-in-wordpress/
*/

function generate_site_nav_menu_item( $term_id, $title, $url ) {
   
	wp_update_nav_menu_item($term_id, 0, array(
			'menu-item-title'   =>  sprintf( __('%s', 'text_domain'), $title ),
			'menu-item-url'     =>  home_url( '/' . $url ),
			'menu-item-status'  =>  'publish'
	) );
 
}

function generate_site_nav_menu( $menu_name, $menu_items_array, $location_target ) {
   
	$menu_primary = $menu_name;
	wp_create_nav_menu( $menu_primary );
	$menu_primary_obj = get_term_by( 'name', $menu_primary, 'nav_menu' );
 
	foreach( $menu_items_array as $page_name => $page_location ){
			generate_site_nav_menu_item( $menu_primary_obj->term_id, $page_name, $page_location );
	}
 
	$locations_primary_arr = get_theme_mod( 'nav_menu_locations' );
	$locations_primary_arr[$location_target] = $menu_primary_obj->term_id;
	set_theme_mod( 'nav_menu_locations', $locations_primary_arr );
		 
	update_option( 'menu_check', true );
 
}


function my_after_setup_theme() {

	/**
	 * Register Navigations
	 */
	register_nav_menus( array(
			'primary'   => __('Primary Navigation', 'text_domain'),
			'secondary' => __('Secondary Navigation', 'text_domain')
	) );   
 
}
add_action( 'after_setup_theme', 'my_after_setup_theme');
	/**
 * Runs when user switches to your custom theme
 *
 */
function my_after_switch_theme() {
	/**
	 * Setup the site navigation
	 */    
		$run_menu_maker_once = get_option('menu_check');

		if ( ! $run_menu_maker_once ){
				/**
				 * Setup Navigation for : Header Menu - Logged In
				 */    
				$primary_menu_items = array(
						'Listings'  =>  'listings',
						'Submit Ad' =>  'submit-ad',       
						'Messages'  =>  'messages',
						'Account'   =>  'account',
						'Logout'    =>  'account?action=logout' // You need to setup your logout url using wp_logout()
				);
				cvf_generate_site_nav_menu( 'Header Menu - Logged In', $primary_menu_items, 'primary' );
				
				/**
				 * Setup Navigation for : Header Menu - Logged Out
				 */
				$secondary_menu_items = array(
						'Listings'  =>  'listings',
						'Submit Ad' =>  'submit-ad',           
						'Register'  =>  'register',
						'Login'     =>  'login'
				);
				cvf_generate_site_nav_menu( 'Header Menu - Logged Out', $secondary_menu_items, 'secondary' );
		}
}
add_action( 'after_switch_theme', 'my_after_switch_theme');


function fallback_menu_pages() {
   
    $list_pages = '';
    $args = array(
        'sort_order' => 'asc',
        'sort_column' => 'post_title',
        'hierarchical' => 1,
        'child_of' => 0,
        'parent' => -1,
        'offset' => 0,
        'number' => 5,
        'post_type' => 'page',
        'post_status' => 'publish'
    ); 
    $pages = get_pages( $args );
       
    foreach( $pages as $key => $page ){
        $list_pages .= '<li><a class="page__link" href = "' . get_permalink( $page->ID ) . '">' . $page->post_title . '</a></li>';
    }
   
    echo $list_pages;
   
}

/**End custom menu  */