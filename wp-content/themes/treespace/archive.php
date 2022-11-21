<?php

/**
 * Template Name: 一覧ページ
 */
?>

<?php get_header(); ?>

<main class="main">
    <h1>ブログ</h1>
    <!-- ピックアップ -->
    <div class="pickup">
        <div class="pickup__title">ピックアップ記事</div>
        <ul class="pickup__list">
            <li class="pickup__list__item">
                <a href="#">
                    <div class="pickup__list__item__thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/thumbnail_sample.png" alt="">
                    </div>
                    <h2>ここに見出しが入りますここに見出しが入りますここに見出しが入りますここに見出しが入ります</h2>
                </a>
            </li>
            <li class="pickup__list__item">
                <a href="#">
                    <div class="pickup__list__item__thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/thumbnail_sample.png" alt="">
                    </div>
                    <h2>ここに見出しが入りますここに見出しが入りますここに見出しが入りますここに見出しが入ります</h2>
                </a>
            </li>
            <li class="pickup__list__item">
                <a href="#">
                    <div class="pickup__list__item__thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/thumbnail_sample.png" alt="">
                    </div>
                    <h2>ここに見出しが入りますここに見出しが入りますここに見出しが入りますここに見出しが入ります</h2>
                </a>
            </li>
        </ul>
    </div>
    <!-- /ピックアップ -->
    <!-- カテゴリ -->
    <div class="category">
        <span>カテゴリ</span>
        <ul class="category__list">
            <li class="is-active">
                <a href="#">海外進出</a>
            </li>
            <li>
                <a href="#">自己分析</a>
            </li>
            <li>
                <a href="#">日常</a>
            </li>
            <li>
                <a href="#">サステナビリティ</a>
            </li>
        </ul>
    </div>
    <!-- /カテゴリ -->
    <!-- 記事一覧 -->
    <div class="article">
        <ul class="article__list">
            <li>
                <div class="text">
                    <div class="text__top">
                        <a href="#">
                            <h2>タイトルタイトルタイトル</h2>
                            <p>記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ</p>
                        </a>
                    </div>
                    <div class="text__bottom">
                        <span class="date">20XX - XX - XX</span>
                        <ul class="hashtags">
                            <li>#ハッシュタグ</li>
                            <li>#ハッシュタグ</li>
                        </ul>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href="#">
                        <img src="assets/img/archive/thumbnail_sample.png" alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="text">
                    <div class="text__top">
                        <a href="#">
                            <h2>タイトルタイトルタイトル</h2>
                            <p>記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ</p>
                        </a>
                    </div>
                    <div class="text__bottom">
                        <span class="date">20XX - XX - XX</span>
                        <ul class="hashtags">
                            <li>#ハッシュタグ</li>
                            <li>#ハッシュタグ</li>
                        </ul>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/thumbnail_sample.png" alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="text">
                    <div class="text__top">
                        <a href="#">
                            <h2>タイトルタイトルタイトル</h2>
                            <p>記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ記事の頭の文章だよ</p>
                        </a>
                    </div>
                    <div class="text__bottom">
                        <span class="date">20XX - XX - XX</span>
                        <ul class="hashtags">
                            <li>#ハッシュタグ</li>
                            <li>#ハッシュタグ</li>
                        </ul>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/thumbnail_sample.png" alt="">
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /記事一覧 -->
</main>

<?php get_footer(); ?>
