<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="main">
    <!-- パンくずリスト -->
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
            <li><a href="#">トップ</a></li>
            <li><a href="#">ブログ</a></li>
            <li><a href="#">海外脱出</a></li>
            <li>ブログ記事タイトル</li>
        </ul>
    </div>
    <!-- /パンくずリスト -->
    <!-- コンテナ -->
    <div class="container">
        <!-- 記事コンテナ -->
        <div class="container__body">
            <h1><?php the_title(); ?></h1>
            <div class="others">
                <span class="date"><?php echo get_the_date('Y-m-d') ?></span>
                <ul class="hashtags">
                    <li><a href="#">#ハッシュタグ</a></li>
                    <li><a href="#">#ハッシュタグ</a></li>
                </ul>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single/single_sample.png" alt="">
            </div>
            <div class="text_body">
                <div class="lead_s">
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
                </div>
            </div>
        </div>
        <!-- /記事コンテナ -->
        <!-- サイドコンテナ -->
        <aside class="container__sub">
            <div class="sticky-item">
                <div class="container__sub__category">
                    <span class="cat_title">●カテゴリ</span>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="name">海外脱出</span>
                                <span class="count">22</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="name">自己分析</span>
                                <span class="count">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="name">日常</span>
                                <span class="count">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="name">サステナビリティ</span>
                                <span class="count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- /サイドコンテナ -->
    </div>
    <!-- /コンテナ -->
</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
