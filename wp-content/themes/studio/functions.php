<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com
Author: q3dm0
Author URI: http://mkvadrat.com
Description: Theme for http://mkvadrat.com
Version: 2.5.0
*/

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
****************************************************************************НАСТРОЙКИ ТЕМЫ*****************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function mk_scripts(){  
	wp_register_style( 'style-css', get_template_directory_uri() . '/css/style.min.css');
	wp_enqueue_style( 'style-css' );
	
	wp_register_style( 'fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', false, '4.4.0' );
	wp_enqueue_style( 'fancybox-css' );
		
	if (!is_admin()) {
    wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', '', '', false );
		wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js', '', '', true );
		wp_enqueue_script( 'scrollmagic-min', get_template_directory_uri() . '/js/ScrollMagic.min.js', '', '', true );
    wp_enqueue_script( 'bxslider-min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', '', '', true );
    wp_enqueue_script( 'fancybox-min', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', '', '', true );
		wp_enqueue_script( 'custom-min', get_template_directory_uri() . '/js/custom.js', '', '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'mk_scripts' );

//Регистрируем название сайта
function mk_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	$title .= get_bloginfo( 'name', 'display' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'ug' ), max( $paged, $page ) );
	}

	if ( is_404() ) {
        $title = '404';
    }

	return $title;
}
add_filter( 'wp_title', 'mk_wp_title', 10, 2 );

//Изображение в шапке сайта
$args = array(
	'width'         => 100,
	'height'        => 100,
	'default-image' => get_template_directory_uri() . '/images/logo.svg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//Добавление в тему миниатюры записи и страницы
if ( function_exists( 'add_theme_support' ) ) {
     add_theme_support( 'post-thumbnails' );
}

//Отключить редактор
add_filter('use_block_editor_for_post', '__return_false');

//Регистрируем меню
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
		  'nav_menu'   => 'Main menu',
		)
	);
}
