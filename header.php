<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Start Favicon -->
    <link type="image/x-icon" rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-96x96.png">
    <!-- <link type="image/png" sizes="120x120" rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-120x120.png"> -->
    <!-- <link type="image/png" sizes="192x192" rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/android-icon-192x192.png"> -->

    <link sizes="57x57" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-57x57.png">
    <link sizes="60x60" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-60x60.png">
    <link sizes="72x72" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-72x72.png">
    <link sizes="76x76" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-76x76.png">
    <link sizes="114x114" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-114x114.png">
    <link sizes="120x120" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-120x120.png">
    <link sizes="144x144" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-144x144.png">
    <link sizes="152x152" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-152x152.png">
    <link sizes="180x180" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-180x180.png">

    <!-- <link color="#e52037" rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/safari-pinned-tab.svg"> -->

    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-150x150.png">
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-310x310.png">
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-310x150.png">
    <meta name="application-name" content="Ukraida">
    <!-- <meta name="msapplication-config" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/browserconfig.xml"> -->

    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <!-- End favicon -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Ukraida</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="wrap container">
                <button class="modal__btn js-open-menu">
                    <svg class="btn__img">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#menu"></use>
                    </svg>
                </button>
                <a href="/" class="logo"><img class="nav__img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Logo" /></a>
                <nav class="nav">
                    <ul class="nav__site">
                        <li class="nav__item"><a class="link" href="/">Startseite</a></li>
                        <li class="nav__item"><a class="link" href="/devpage">Über uns</a></li>
                        <li class="nav__item"><a class="link" href="/devpage">Aktuelles</a></li>
                        <li class="nav__item"><a class="link" href="/devpage">Spenden</a></li>
                        <li class="nav__item"><a class="link" href="/devpage">Mitmachen</a></li>
                        <li class="nav__item"><a class="link" href="/devpage">Projekte</a></li>
                    </ul>
                </nav>
                <ul class="menu">
                    <li>
                        <a href="https://www.instagram.com/ukraida_darmstadt/" target="_blank" class="menu__item-inst">
                            <svg>
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu__item">
                            <svg class="menu__img">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#language"></use>
                            </svg>
                            <span class="menu__itm-lang active">DE</span>&nbsp;/&nbsp;<span class="menu__itm-lang">UA</span></a>
                    </li>
                    <li><button type="button" id="js-btn-donate" class="menu__btn">Spenden</button></li>
                </ul>

                <!-- mobile menu -->
                </container>
                <div class="menu__overlay">
                    <div class="js-menu-container">
                        <ul class="menu__modal">
                            <li>
                                <a href="/" class="menu__modal-item">
                                    <svg class="menu__modal-img">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#language"></use>
                                    </svg>
                                    <span class="menu__itm-lang active">DE</span>&nbsp;/&nbsp;<span class="menu__itm-lang">UA</span></a>
                            </li>
                            <li>
                                <button class="modal__btn js-close-menu">
                                    <svg>
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#close"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <div class="nav__modal-wrap">
                            <ul class="nav__modal">
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/">Startseite</a>
                                </li>
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/devpage">Über uns</a>
                                </li>
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/devpage">Aktuelles</a>
                                </li>
                            </ul>
                            <ul class="nav__modal">
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/devpage">Spenden</a>
                                </li>
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/devpage">Mitmachen</a>
                                </li>
                                <li class="nav__item-modal">
                                    <a class="link-modal" href="/devpage">Projekte</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu__item-modal">
                            <a href="https://www.instagram.com/ukraida_darmstadt/" target="_blank">
                                <svg class="nav__img-inst">
                                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#instagram"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-donate">
                <?php get_template_part('parts/modal-donate', null, []); ?>
            </div>
        </header>