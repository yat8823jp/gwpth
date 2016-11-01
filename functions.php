<?php
if ( ! isset( $content_width ) ) {
	$content_width = 1020;
}

define( 'COMMON_PFIX', get_template_directory_uri() );
//初期設定
add_action( 'after_setup_theme', 'init_setup_func' );
if ( ! function_exists( 'init_setup_func' ) ) {
	function init_setup_func() {
		add_editor_style( 'css/common.css' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );

		// ナビメニューの登録
		register_nav_menus( array(
			'gnavi' => 'ヘッダーグローバルナビ',
		) );
	}
}//if

// 機能を読み込み
get_template_part( 'inc/cssjs' ); // CSSファイル、JSファイルの読み込み
// get_template_part( 'inc/widget' ); // ウィジェットの読み込み
// get_template_part( 'inc/walker' ); // カスタムメニューのWalkerクラスの読み込み
// get_template_part( 'inc/ua' ); // ユーザーエージェントの判定PHP

// メディアの画質向上
add_filter( 'jpeg_quality',function( $arg ) { return 100; } );
