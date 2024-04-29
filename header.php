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
                    <?php wp_nav_menu([
                        'theme_location'       => 'header',
                        'container'            => false,
                        'menu_class'           => 'nav__site',
                        'menu_id'              => false,
                        'echo'                 => true,
                        'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',
                    ]);
                    ?>
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
                    <!-- <li><button type="button" id="js-btn-donate" class="menu__btn">Spenden</button></li> -->
                    <li><button type="button" id="js-btn-donate" class="menu__btn"><?php echo get_field('header_button_text'); ?></button></li>
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
                            <?php wp_nav_menu([
                                'theme_location'       => 'header',
                                'container'            => false,
                                'menu_class'           => 'nav__modal',
                                'menu_id'              => false,
                                'echo'                 => true,
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',
                            ]);
                            ?>
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