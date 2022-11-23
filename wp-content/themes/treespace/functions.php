<?php

function add_css_js()
{ //関数名add_css_js()を作成
	//CSSの読み込みはここから

	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/vendor/reset.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');


	//固定ページスラッグcontact か 投稿ID46の記事 か カスタム投稿タイプadd_newsの記事 か カスタム投稿タイプadd_newsの一覧だった場合、css/store2.cssを読み込み
	// if (is_page('contact')||is_single(46) || is_singular('add_news') || is_post_type_archive('add_news')) {
	// 	wp_enqueue_style('store2', get_template_directory_uri().'/css/store2.css');
	// }


	//JavaScriptの読み込みはここから

	//全てのページにjs/pagetop.jsを読み込み
	// wp_enqueue_script('pagetop', get_template_directory_uri().'/js/pagetop.js');

	//トップページのみ
	// if (is_home()) {

	// //js/main.jsをfooter直下で読み込み
	// 	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '', true);
	// }
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

// アイキャッチ画像
add_theme_support('post-thumbnails');


// サイドバーにカテゴリーのリストを出力
function filter_to_wp_list_categories($output)
{
	$output = str_replace('</a> (', '<span class="count">', $output);
	$output = str_replace(')', '</span></a>', $output);
	return $output;
}
add_filter('wp_list_categories', 'filter_to_wp_list_categories');
