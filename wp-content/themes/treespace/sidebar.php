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
