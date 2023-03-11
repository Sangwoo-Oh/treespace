<?php get_header(); ?>
<main class="main top">
    <div class="mainVisual">
        <div class="mainVisual__innerwrap">
            <p class="concept">海外で生きる力をもって日本で暮らしたい20代ふたりによる発信</p>
        </div>
    </div>
    <div class="main__inner">
        <div class="catSection">
            <div class="catSection__title">-海外関連-</div>
            <ul class="catSection__list">
                <?php
                $menu_name = 'top_escape';
                if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ((array) $menu_items as $key => $menu_item) {
                ?>
                        <li class="catSection__list__item">
                            <a href="<?php echo $menu_item->url; ?>">
                                <div class="catSection__list__item__thumbnail">
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
            <?php $catEscape = get_term_by('slug', 'escape', 'category');?>
            <a class="catSection__link" href="<?php echo get_category_link($catEscape->term_id);?>">ふたりの日本脱出計画をのぞいてみる</a>
        </div>

        <div class="catSection">
            <div class="catSection__title">-知識と経験-</div>
            <ul class="catSection__list">
                <?php
                $menu_name = 'top_experience';
                if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ((array) $menu_items as $key => $menu_item) {
                ?>
                        <li class="catSection__list__item">
                            <a href="<?php echo $menu_item->url; ?>">
                                <div class="catSection__list__item__thumbnail">
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
            <?php $catEscape = get_term_by('slug', 'experience', 'category');?>
            <a class="catSection__link" href="<?php echo get_category_link($catEscape->term_id);?>">ふたりの知識と経験をみてみる</a>
        </div>

        <div class="catSection">
            <div class="catSection__title">-ふたりの日常-</div>
            <ul class="catSection__list">
                <?php
                $menu_name = 'top_life';
                if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ((array) $menu_items as $key => $menu_item) {
                ?>
                        <li class="catSection__list__item">
                            <a href="<?php echo $menu_item->url; ?>">
                                <div class="catSection__list__item__thumbnail">
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
            <?php $catEscape = get_term_by('slug', 'life', 'category');?>
            <a class="catSection__link" href="<?php echo get_category_link($catEscape->term_id);?>">ふたりの日常をのぞいてみる</a>
        </div>

        <div class="about-us">
            <a href="<?php echo get_permalink(53); ?>">ブログを運営する私たちについて</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>
