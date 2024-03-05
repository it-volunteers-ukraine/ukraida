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
            <button class="modal js-open-menu">
                <img src="wp-content/themes/ukraida/src/images/header/menu.svg" alt="menu" />
            </button>
            <a href="#" class="logo">UKRAIDA<img class="nav__img" src="wp-content/themes/ukraida/src/images/header/logo.svg" alt="Logo" /></a>
            <nav class="nav">
                <ul class="nav__site">
                    <li class="nav__item"><a class="link" href="#">Головна</a></li>
                    <li class="nav__item"><a class="link" href="#">Про нас</a></li>
                    <li class="nav__item"><a class="link" href="#">Новини</a></li>
                    <li class="nav__item"><a class="link" href="#">Пожертви</a></li>
                    <li class="nav__item"><a class="link" href="#">Долучитися</a></li>
                    <li class="nav__item"><a class="link" href="#">Проєкти</a></li>
                </ul>
            </nav>
            <ul class="menu">
                <li>
                    <a href="#" class="menu__item-inst"><img src="wp-content/themes/ukraida/src/images/header/instagram.svg" alt="instagram" /></a>
                </li>
                <li>
                    <a href="#" class="menu__item"><img class="menu__img" src="wp-content/themes/ukraida/src/images/header/language.svg" alt="language" /><span class="menu__itm-lang">DE</span>/UA</a>
                </li>
                <li><button class="menu__btn">Задонатити</button></li>
            </ul>

            <!-- mobile menu -->
        </container>
        <div class="menu__overlay container">
            <div class="js-menu-container">
                <ul class="menu__modal">
                    <li>
                        <a href="#" class="menu__modal-item"><img class="menu__modalimg" src="wp-content/themes/ukraida/src/images/header/language.svg" alt="language" /><span class="menu__itm-lang">DE&nbsp;</span>/&nbsp;UA</a>
                    </li>
                    <li>
                        <button class="modal js-close-menu">
                            <img src="wp-content/themes/ukraida/src/images/header/close.svg" alt="close" width="17" />
                        </button>
                    </li>
                </ul>
                <ul class="nav__modal">
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Головна</a>
                    </li>
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Про нас</a>
                    </li>
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Новини</a>
                    </li>
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Пожертви</a>
                    </li>
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Долучитися</a>
                    </li>
                    <li class="nav__item-modal">
                        <a class="link-modal" href="#">Проєкти</a>
                    </li>
                </ul>
                <div class="menu__item-modal">
                    <a href="#"><img class="nav__img-inst" src="wp-content/themes/ukraida/src/images/header/instagram.svg" alt="instagram" width="36" /></a>
                </div>
            </div>
        </div>
    </header>