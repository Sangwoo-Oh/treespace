<aside class="container__sub">
    <div class="sticky-item">
        <div class="container__sub__category">
            <span class="cat_title">●カテゴリー</span>
            <ul>
                <?php
                $args = array(
                    'show_count' => 1,
                    'title_li' => '',
                );
                wp_list_categories($args);
                ?>
            </ul>
        </div>
    </div>
</aside>
