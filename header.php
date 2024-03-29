<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Ukraida</title>
</head>

<body>
    <header class="header">
        <div class="wrap container">
            <button class="modal__btn js-open-menu">
                <img class="btn__img" src="<?php bloginfo('template_url'); ?>/assets/images/header/menu.svg" alt="menu" />
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
                    <a href="https://www.instagram.com/ukraida_darmstadt/" target="_blank" class="menu__item-inst"><img src="<?php bloginfo('template_url'); ?>/assets/images/header/instagram.svg" alt="instagram" width="32" /></a>
                </li>
                <li>
                    <a href="#" class="menu__item"><img class="menu__img" src="<?php bloginfo('template_url'); ?>/assets/images/header/language.svg" alt="language" />DE&nbsp;/&nbsp;<span class="menu__itm-lang">UA</span></a>
                </li>
                <li><button type="button" id="js-btn-donate" class="menu__btn">Spenden</button></li>
            </ul>

            <!-- mobile menu -->
            </container>
            <div class="menu__overlay">
                <div class="js-menu-container">
                    <ul class="menu__modal">
                        <li>
                            <a href="/" class="menu__modal-item"><img class="menu__modal-img" src="<?php bloginfo('template_url'); ?>/assets/images/header/language.svg" alt="language" />DE&nbsp;/&nbsp;<span class="menu__itm-lang">UA</span></a>
                        </li>
                        <li>
                            <button class="modal__btn js-close-menu">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/header/close.svg" alt="close" width="17" />
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
                        <a href="https://www.instagram.com/ukraida_darmstadt/" target="_blank"><img class="nav__img-inst modalƒ" src="<?php bloginfo('template_url'); ?>/assets/images/header/instagram.svg" alt="instagram" width="36" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-donate">
            <?php get_template_part('parts/modal-donate', null, []); ?>
        </div>
    </header>