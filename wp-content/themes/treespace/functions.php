<?php

function add_css_js()
{ //関数名add_css_js()を作成
	//CSSの読み込みはここから

	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('reset_css', get_template_directory_uri() . '/assets/css/vendor/reset.css');
	wp_enqueue_style('common_css', get_template_directory_uri() . '/assets/css/common.css');
	if (is_front_page()) {
		wp_enqueue_style('top_css', get_template_directory_uri() . '/assets/css/top.css');
	} else if (is_page('blog') || is_archive()) {
		wp_enqueue_style('archive_css', get_template_directory_uri() . '/assets/css/archive.css');
	} else if (is_single()) {
		wp_enqueue_style('single_css', get_template_directory_uri() . '/assets/css/single.css');
	}
	// if (is_single(46)) {
	// 	wp_enqueue_style('store2', get_template_directory_uri().'/css/store2.css');
	// }
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


// TinyMCE カスタマイズ
function custom_editor_settings($initArray)
{
	$initArray['fontsize_formats'] = '12px 14px 16px 20px 24px 28px 32px 36px';
	return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_editor_settings', 5);

add_filter('tiny_mce_before_init', function ($settings) {
	$settings['font_formats'] =
		"Century Gothic='Century Gothic';" .
		"Franklin Gothic Medium='Franklin Gothic Medium';" .
		"Gulim='Gulim';" .
		"Impact='Impact';" .
		"Verdana='Verdana';" .
		// "Georgia='Georgia';" .
		"Times New Roman='Times New Roman';" .
		"Courier New='Courier New';" .
		"Comic Sans MS='Comic Sans MS';" .
		"ＭＳ Ｐゴシック='ＭＳ Ｐゴシック','MS PGothic';" .
		"ＭＳ ゴシック='ＭＳ ゴシック','MS Gothic';" .
		"游ゴシック体='游ゴシック体', YuGothic, '游ゴシック', 'Yu Gothic';" .
		"ヒラギノ角ゴ='ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','ヒラギノ角ゴ ProN W3','Hiragino Kaku Gothic ProN';" .
		"ヒラギノ丸ゴ='ヒラギノ丸ゴ Pro W4','Hiragino Maru Gothic Pro','ヒラギノ丸ゴ ProN W4','Hiragino Maru Gothic ProN';" .
		"ＭＳ Ｐ明朝='ＭＳ Ｐ明朝','MS PMincho';" .
		"ＭＳ 明朝='ＭＳ 明朝','MS Mincho';" .
		"游明朝='游明朝','Yu Mincho';" .
		"ヒラギノ明朝='ヒラギノ明朝 Pro W3','Hiragino Mincho Pro',ヒラギノ明朝 ProN W3','Hiragino Mincho ProN';" .
		"游明朝体='游明朝体','YuMincho';";
	return $settings;
});

function new_excerpt_mblength($length)
{
	return 50;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
