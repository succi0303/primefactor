<?php

// カスタムメニュー
register_nav_menus(array(
	'navigation' => ' ナビケーションバー '
));

// カスタムヘッダー
add_custom_image_header('','admin_header_style');
function admin_header_style() {}

define('NO_HEADER_TEXT',true);
define('HEADER_IMAGE','%s/cat_icon.png');
define('HEADER_IMAGE_WIDTH',75);
define('HEADER_IMAGE_HEIGHT',75);

// ウィジェット
register_sidebar();

// WordPressのバージョン情報の出力を停止する
remove_action('wp_head','wp_generator');

// RSSフィードの情報を出力する
add_theme_support('automatic-feed-links');

// jQueryの設定を出力する
add_action('wp_head','myScript',1);
function myScript() {
	wp_enqueue_script('jQuery');
}

// エディタスタイルシートを有効にする
add_editor_style();

// ギャラリーのスタイルシートの出力を停止する
add_filter('use_default_gallery_style','__return_false');

// アイキャッチ画像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(550,400,true);

?>