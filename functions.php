<?php

// CPT TAXONOMY

// include('configure/cpt-taxonomy.php');

// Utilities

// include('configure/utilities.php');

// CONFIG

// include('configure/configure.php');

// JAVASCRIPT & CSS

// include('configure/js-css.php');

// SHORTCODES

// include('configure/shortcodes.php');

// ACF

// include('configure/acf.php');

// HOOKS ADMIN

// if (is_admin()) {
// 	include('configure/admin.php');
// }

define('THEME_JS', get_template_directory_uri() . '/js');
define('THEME_NONCE', '_acp');


// Подключаем скрипты
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	 wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], '3.3.1', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('ajax-form', THEME_JS  . '/ajax-form.min.js', [], null, true);
    
   
		wp_localize_script( 'ajax-form', 'ajax_form_object', array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'ajax-form-nonce' ),
		) );
}


add_action('after_setup_theme', function () {
	register_nav_menu('mainMenu', 'Главное меню');
	register_nav_menu('footerMenu', 'Меню в подвале');
});


// FIXME: вынести в файл
// Галерею делаю как тип записи, отдельная запись хранит в себе множество фото, делим каталоги по рубрикам
// делаю таб меню с сылками каждая ссылка это новая страница, сделать так, чтобы это был один шаблон и не привязывать на каждую страницу табы
 
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

add_action( 'after_setup_theme', 'mywoo_add_woocommerce_support' );
function mywoo_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'wp_ajax_ajax_form_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_ajax_form_action', 'ajax_action_callback' );

function ajax_action_callback() {

	// Массив ошибок
	$errors = [];

	// Если не прошла проверка nonce, то блокируем отправку
	if ( !wp_verify_nonce( $_POST['nonce'], 'ajax-form-nonce' ) ) {
		wp_die( 'Данные отправлены с некорректного адреса' );
	}

	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	if ( $_POST['form_anticheck'] === false || !empty( $_POST['form_submitted'] ) ) {
		wp_die( 'bye' );
	}


	// Проверяем поле имени, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['form_name'] ) || !isset( $_POST['form_name'] ) ) {
		$errors['name'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$form_name = sanitize_text_field( $_POST['form_name'] );
	}

	// Проверяем поле ввода телефона, если пустое, то пишем сообщение в массив ошибок
	if ( empty( $_POST['form_tel'] ) || !isset( $_POST['form_tel'] ) ) {
		$errors['tel'] = 'Пожалуйста, введите номер телефона';
	} else {
		$form_tel = sanitize_text_field( $_POST['form_tel'] );
	}


	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $errors ) {

		wp_send_json_error( $errors );

	} else {

		// Узнаем с какого сайта пришло письмо
		$home_url = wp_parse_url( home_url() );
		$subject = 'Письмо с сайта ' . $home_url['host'];

		// Указываем адресаты
		$email_to = 'ilia.workproffile@gmail.com';
    
		$email_from = get_option( 'admin_email' );
		$url = $_POST['url'];
		$utm = $_POST['utm'];

		// Собираем письмо
		$body  = 'Имя: ' . $form_name . '<br> Телефон: ' . $form_tel . '<br> Ссылка:' . $url . '<br> UTM:' . $utm;

		$headers = array('Content-Type: text/html; charset=UTF-8');
		// $headers = 'From: ' . $home_url['host'] . ' <' . $email_from . '>' . "\r\n" . 'Reply-To: ' . $email_from;

		// Отправляем
		wp_mail( $email_to, $subject, $body, $headers );
		// wp_mail( $email_to, $subject, $body, $headers );

		// Отправляем сообщение об успешной отправке
		$message_success = 'Собщение отправлено. В ближайшее время мы с вами свяжемся';
		wp_send_json_success( $message_success );
	}

	// Убиваем процесс ajax
	wp_die();

}
