<?php

/**
 * Template Name: 一覧ページ
 */
?>

<?php get_header(); ?>

<main class="main page">
    <h1>ブログ</h1>
    <!-- ピックアップ -->
    <!-- <div class="pickup">
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
    </div> -->
    <!-- /ピックアップ -->
    <!-- カテゴリ -->
    <?php if (is_category()) : ?>
    <h2 class="category_message">カテゴリ『<?php single_cat_title(); ?>』の記事一覧</h2>
    <?php endif; ?>
    <div class="select_category">
        <span>カテゴリ</span>
        <ul class="select_category__list">
            <li <?php if (!is_category()) { echo 'class="is-active"'; } ?>><a href="/blog/">すべて</a></li>
            <?php $all_categories = get_categories(); ?>
            <?php foreach ($all_categories as $cat) : ?>
                <li <?php if (get_cat_name($cat->term_id) == single_cat_title('', false)) {
                        echo 'class="is-active"';
                    } ?>>
                    <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo get_cat_name($cat->term_id); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- /カテゴリ -->
    <!-- 記事一覧 -->
    <div class="article">
        <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
        <?php

        $args = [
            'post_type'      => 'post',
            'posts_per_page'  => 10,
            'post_status'     => 'publish',
            'order'           => 'DESC',
            'orderby'         => 'date',
            'paged'           => $paged
        ];
        if (is_category()) :
            $cat = get_queried_object();
            $cat_slug = $cat->slug;
            $args['category_name'] = $cat_slug;
        endif;

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();

                //ループの中身
        ?>
                <ul class="article__list">
                    <li>
                        <div class="text">
                            <div class="text__top">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
                                </a>
                            </div>
                            <div class="text__bottom">
                                <span class="date"><?php echo get_the_date('Y-m-d') ?></span>
                                <ul class="hashtags">
                                    <?php $categories = get_the_category(); ?>
                                    <?php foreach ($categories as $cat) : ?>
                                        <li>#<?php echo get_cat_name($cat->term_id); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
        <?php
            endwhile;
            wp_reset_postdata();
            //ページネーションを追加するラッパー関数;
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $query));
            }
        endif;

        $posts_array = get_posts($args);
        ?>
    </div>
    <!-- /記事一覧 -->

    <!-- カテゴリ（SP表示用） -->
    <div class="select_category_sp">
        <span>カテゴリ</span>
        <ul class="select_category_sp__list">
            <li <?php if (!is_category()) { echo 'class="is-active"'; } ?>><a href="/blog/">すべて</a></li>
            <?php $all_categories = get_categories(); ?>
            <?php foreach ($all_categories as $cat) : ?>
                <li <?php if (get_cat_name($cat->term_id) == single_cat_title('', false)) {
                        echo 'class="is-active"';
                    } ?>>
                    <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo get_cat_name($cat->term_id); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- /カテゴリ（SP表示用） -->
</main>

<?php get_footer(); ?>
