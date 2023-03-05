<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="main page">
    <!-- パンくずリスト -->
    <div class="breadcrumbs">
        <!-- <ul class="breadcrumbs__list">
            <li><a href="#">トップ</a></li>
            <li><a href="#">ブログ</a></li>
            <li><a href="#">海外脱出</a></li>
            <li>ブログ記事タイトル</li>
        </ul> -->
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <!-- /パンくずリスト -->
    <!-- コンテナ -->
    <div class="container">
        <!-- 記事コンテナ -->
        <div class="container__body">
            <?php if(has_post_thumbnail()): ?>
            <div class="image">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
            </div>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <div class="others">
                <span class="date"><?php echo get_the_date('Y-m-d') ?></span>
                <ul class="hashtags">
                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $cat): ?>
                        <li><a href="<?php echo get_category_link($cat->term_id); ?>">#<?php echo get_cat_name($cat->term_id); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="text_body">
                <?php echo the_content(); ?>
                <!-- <div class="lead_s">
                    <p>導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ導入や要約などを書く部分だよ</p>
                </div>
                <div class="table-of-contents">
                    <span>目次</span>
                    <ol>
                        <li>aaa</li>
                        <li>bbb</li>
                        <li>ccc</li>
                    </ol>
                </div>
                <div class="main_s">
                    <p>本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ</p>
                    <p>本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ</p>
                    <p>本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ</p>
                    <p>本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ</p>
                    <p>本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ本文はこんな感じだよ</p>
                </div> -->
            </div>
        </div>
        <!-- /記事コンテナ -->
        <!-- サイドコンテナ -->
        <?php get_sidebar(); ?>
        <!-- /サイドコンテナ -->
    </div>
    <!-- /コンテナ -->
</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
