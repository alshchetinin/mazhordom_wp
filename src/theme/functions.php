<?php
function wordpressify_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri());		
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'wordpressify_resources' );


add_filter('show_admin_bar', '__return_false');
register_nav_menus(array(
	'top'    => 'Верхнее меню'
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Настройки сайта'),
		'menu_title'    => __('Настройки сайта'),
		'menu_slug'     => 'theme-general-settings'
  ));
	
}

add_action( 'enqueue_block_editor_assets', 'guttenberEditor' );
function guttenberEditor() {
	
	wp_enqueue_style( 'guttenberEditor', get_theme_file_uri( '/style-editor.css' ), false );
}


function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}


//Регистрация блоков
function hero() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'hero',
			  'title'             => __('Гланвый блок'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/hero.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'hero' );

function simple() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'simple',
			  'title'             => __('Блок «Просто»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/simple.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'simple' );

function profitable() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'profitable',
			  'title'             => __('Блок «Выгодно»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/profitable.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'profitable' );


function available() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'available',
			  'title'             => __('Блок «Доступно»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/available.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'available' );

function functionality() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'functionality',
			  'title'             => __('Блок «Функциональность»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/functionality.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'functionality' );

function introduction() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'introduction',
			  'title'             => __('Блок «Итоги внедрения»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/introduction.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'introduction' );


function case_item() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'case_item',
			  'title'             => __('Блок «Кейсы»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/case_item.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'case_item' );

function reviews() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'reviews',
			  'title'             => __('Блок «Отзывы»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/reviews.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'reviews' );

function contact() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'contact',
			  'title'             => __('Блок «Контакты»'),
			  'description'       => __(''),			  
			  'render_template'   => '/blocks/contact.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}
add_action( 'acf/init', 'contact' );