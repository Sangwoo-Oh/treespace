<?php

/**
 * Template Name: 一覧ページ
 */
?>

<?php get_header(); ?>

<main class="main page">
    <h1>ブログ</h1>
    <!-- ピックアップ -->
    <?php if (!is_category() && !is_tag()) :?>
    <div class="pickup">
        <div class="pickup__title">ピックアップ記事</div>
        <ul class="pickup__list">
        <?php
        $menu_name = 'pickup';
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            foreach ( (array) $menu_items as $key => $menu_item ) {
        ?>
            <li class="pickup__list__item">
                <a href="<?php echo $menu_item->url; ?>">
                    <div class="pickup__list__item__thumbnail">
                        <img src="<?php echo get_the_post_thumbnail_url($menu_item->object_id); ?>" alt="">
                    </div>
                    <h2><?php echo $menu_item->title; ?></h2>
                </a>
            </li>
        <?php
            }
        }
        ?>
        </ul>
    </div>
    <?php endif; ?>
    <!-- /ピックアップ -->

    <!-- カテゴリ -->
    <?php if (is_category()) : ?>
        <h2 class="category_message">カテゴリ『<?php single_cat_title(); ?>』の記事一覧</h2>
    <?php endif; ?>
    <?php if (is_tag()) :?>
        <h2 class="category_message">タグ『<?php single_tag_title(); ?>』の記事一覧</h2>
    <?php endif; ?>

    <?php if (!is_tag()) : ?>
    <div class="select_category">
        <span>カテゴリ</span>
        <ul class="select_category__list">
            <li <?php if (!is_category()) {
                        echo 'class="is-active"';
                    } ?>><a href="/blog/">すべて</a></li>
            <?php
            $menu_name = 'category';
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                foreach ( (array) $menu_items as $key => $menu_item ) {
            ?>
                <li <?php if ($menu_item->title == single_cat_title('', false)) {
                        echo 'class="is-active"';
                    } ?>>
                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
    <?php endif; ?>

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

        if (is_tag()) :
            $tag = get_queried_object();
            $tag_slug = $tag->slug;
            $args['tag'] = $tag_slug;
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
                                    <?php $tags = get_the_tags(); ?>
                                    <?php if ($tags) : ?>
                                        <?php foreach ($tags as $tag) : ?>
                                            <li>#<?php echo $tag->name; ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
            <li <?php if (!is_category()) {
                    echo 'class="is-active"';
                } ?>><a href="/blog/">すべて</a></li>
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
