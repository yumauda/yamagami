<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php if (is_home() || is_front_page()) : ?>
        <title>山上｜採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('')) : ?>
        <title>山上｜採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page((array('contact', 'confirm')))) : ?>
        <title>山上｜採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('thanks')) : ?>
        <title>山上｜採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_single()) : ?>
        <title>山上｜採用サイト</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />


    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header">
        <div class="p-header__inner">
            <div class="p-header__content">
                <div class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="Yamagami リクルートサイト" width="340" height="120">
                    </a>
                </div>
                <nav class="p-header__nav">
                    <ul class="p-header__lists">
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/message')); ?>" class="p-header__link">メッセージ</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/works')); ?>" class="p-header__link">仕事を知る</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/interview')); ?>" class="p-header__link">先輩を知る</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/growth')); ?>" class="p-header__link">働く環境を知る</a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-header__link">会社を知る</a>
                        </li>
                    </ul>
                    <div class="p-header__btn-wrapper">
                        <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="p-header__btn">
                            <p class="p-header__btn-text">募集要項</p>
                            <p class="p-header__btn-text--en">recruit</p>
                        </a>
                        <div class="p-header__scroll-box">
                            <div class="p-header__scroll-wrapper">
                                <p class="p-header__btn-scroll">join us</p>
                                <p class="p-header__btn-scroll">join us</p>
                                <p class="p-header__btn-scroll">join us</p>
                            </div>
                            <div class="p-header__scroll-wrapper">
                                <p class="p-header__btn-scroll">join us</p>
                                <p class="p-header__btn-scroll">join us</p>
                                <p class="p-header__btn-scroll">join us</p>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>