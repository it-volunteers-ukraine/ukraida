<?php get_header();
/*
Template Name: devpage
*/
?>
<section class="section__next-event container">
    <div class="dev__page">
        <img class="dev__page-img1" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img1.png" alt="pigeon" />
        <img class="dev__page-img2" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img2.png" alt="pigeon" />
        <img class="dev__page-img3" src="<?php bloginfo('template_url'); ?>/assets/images/dev_page/dev_page-img3.png" alt="pigeon" />
        <div class="text__wrap">
            <h2 class="title__text">Diese Seite wird gerade entwickelt.</h2>
            <p class="text__item">
                Vielen Dank, dass Sie dabei sind. Diese Seite
                wird in absehbarer Zeit verfügbar sein. Bitte
                schauen Sie später wieder vorbei.
                Danke für Ihr Verständnis.
            </p>
            <div>
                <a href="/">
                    <button class="dev__btn">Zur Startseite</button>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>