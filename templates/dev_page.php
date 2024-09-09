<?php get_header();
/*
Template Name: devpage
*/
    $header_text = esc_html(get_field('header_text'));
    $paragraph_text = esc_html(get_field('paragraph_text'));
    $button_text = esc_html(get_field('return_to_home_button_text'));

    $home_url = function_exists('pll_home_url') ? esc_url(pll_home_url()) : '/';
?>
<div class="wrapper">
    <main>
        <section class="container dev__page-wrap">
            <div class="dev__page">
                <img class="dev__page-img1" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img1.png" alt="pigeon" />
                <img class="dev__page-img2" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img2.png" alt="pigeon" />
                <img class="dev__page-img3" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img3.png" alt="pigeon" />
                <div class="text__wrap">
                    <h2 class="title__text"><?= $header_text ?></h2>
                    <p class="text__item"><?= $paragraph_text ?></p>
                    <div>
                        <a href="<?= $home_url ?>">
                            <button class="dev__btn"><?= $button_text ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>