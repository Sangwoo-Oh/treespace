<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner__logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                    <span>社会人の海外渡航を応援するブログ</span>
                </a>
            </div>
            <div class="header__inner__search">
                <input type="text" placeholder="検索...">
            </div>
            <div class="header__inner__nav">
                <nav>
                    <ul>
                        <li><a href="/blog/">ブログ</a></li>
                        <!-- <li><a href="#">お問い合わせ</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
