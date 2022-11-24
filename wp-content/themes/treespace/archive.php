<?php

/**
 * Template Name: 一覧ページ
 */
?>

<?php get_header(); ?>

<main class="main page">
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
    <div class="select_category">
        <span>カテゴリ</span>
        <ul class="select_category__list">
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
        <?php $args = array(
            'posts_per_page'   => 5,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'       => '',
            'post_status'      => 'publish',
            'suppress_filters' => true
        );
        $posts_array = get_posts($args);
        ?>
        <ul class="article__list">
            <?php foreach ($posts_array as $post): ?>
            <li>
                <div class="text">
                    <div class="text__top">
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </a>
                    </div>
                    <div class="text__bottom">
                        <span class="date"><?php echo get_the_date('Y-m-d') ?></span>
                        <ul class="hashtags">
                            <li>#ハッシュタグ</li>
                            <li>#ハッシュタグ</li>
                        </ul>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
                    </a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- /記事一覧 -->
</main>

<?php get_footer(); ?>
