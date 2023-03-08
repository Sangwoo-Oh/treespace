<?php

/**
 * Template Name: 2カラムページ
 */
?>

<?php get_header(); ?>

<main class="main page">
    <!-- パンくずリスト -->
    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <!-- /パンくずリスト -->
    <!-- コンテナ -->
    <div class="container">
        <!-- 記事コンテナ -->
        <div class="container__body">
        <?php if(have_posts()): while(have_posts()): the_post();?>
            <h1><?php the_title(); ?></h1>
            <div class="text_body">
            <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- /記事コンテナ -->
        <!-- サイドコンテナ -->
        <?php get_sidebar(); ?>
        <!-- /サイドコンテナ -->
    </div>
    <!-- /コンテナ -->
</main>

<?php get_footer(); ?>
