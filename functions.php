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
