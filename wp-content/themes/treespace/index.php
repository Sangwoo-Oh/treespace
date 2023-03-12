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

        <div class="keywordSection">
            <div class="keywordSection__title">-キーワードからさがす-</div>
            <ul class="keywordSection__list">
                <?php
                $menu_name = 'top_keyword';
                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                ?>
                    <li>
                        <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                    </li>
                <?php
                    }
                } else {
                ?>
                Coming Soon...
                <?php
                }
                ?>
            </ul>
        </div>

        <div class="about-us">
            <div class="about-us__flexbox">
            <div class="about-us__profile">
                <img class="about-us__profile__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/7.svg" alt="">
                <p class="about-us__profile__name">ナナ</p>
                <p class="about-us__profile__info">25歳 女性 会社員</p>
                <p class="about-us__profile__description">大学時代は学生NPO団体代表。大学卒業後、サステナブル系ベンチャーに就職し、営業や新規事業立ち上げなど幅広く経験。日本脱出計画の発起人。</p>
            </div>
            <div class="about-us__profile">
            <img class="about-us__profile__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/10.svg" alt="">
                <p class="about-us__profile__name">ジュウ</p>
                <p class="about-us__profile__info">25歳 男性 会社員</p>
                <p class="about-us__profile__description">大学卒業後、Webアプリのフロントエンドエンジニアとして就職。趣味はナナに料理を作ること。日本脱出のために英語学習を頑張っている。</p>
            </div>
            </div>
            <a href="<?php echo get_permalink(53); ?>">ブログを運営する私たちについて</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>
