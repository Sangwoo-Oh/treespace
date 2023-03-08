<?php get_header(); ?>
<main class="main top">
    <div class="mainVisual">
        <div class="mainVisual__innerwrap">
            <p class="concept">海外で生きる力をもって日本で暮らしたい20代ふたりが、情報発信するブログ</p>
        </div>
    </div>
    <div class="main__inner">
        <div class="pickup">
            <div class="pickup__title">ピックアップ記事</div>
            <ul class="pickup__list">
                <?php
                $menu_name = 'pickup';
                if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ((array) $menu_items as $key => $menu_item) {
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
            <a class="pickup__link" href="/blog/">もっと見る</a>
        </div>
        <div class="about-us">
            <a href="<?php echo get_permalink(53); ?>">ブログを運営する私たちについて</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>
