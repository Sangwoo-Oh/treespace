<aside class="container__sub">
    <div>
        <div class="container__sub__category">
            <span class="container__sub__category__title">カテゴリー別に読む</span>
            <ul>
                <?php
                $categories = get_categories();
                foreach ($categories as $cat) {
                ?>
                    <li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>(<?php echo $cat->category_count; ?>)</li>
                <?php
                }
                ?>
            </ul>
        </div>
        <?php
        $menu_name = 'top_keyword';
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        ?>
        <div class="container__sub__keyword">
            <span class="container__sub__category__title">キーワードからさがす</span>
            <ul>
        <?php
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            foreach ( (array) $menu_items as $key => $menu_item ) {
        ?>
                <li>
                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                </li>
        <?php
            }
        ?>
            </ul>
        </div>
        <?php
        }
        ?>
        <div class="container__sub__new-article">
            <span class="container__sub__new-article__title">
                <span class="container__sub__new-article__title__mark">New!</span>
                最新の記事
            </span>
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page'  => 1,
                'post_status'     => 'publish',
                'order'           => 'DESC',
                'orderby'         => 'date',
            );
            $posts = get_posts($args);
            foreach ($posts as $post) {
            ?>
            <a href="<?php the_permalink(); ?>">
                <p><?php echo $post->post_title; ?></p>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</aside>
