<?php
/*
Template Name: home
*/
get_header();
?>
<main>
    <section id="next-event" class="section section__next-event">
        <div class="container container__next-event">
            <?php get_template_part('parts/next-event', null, []); ?>
        </div>
    </section>  

    <section id="projects" class="section section__projects-swiper">
        <div class="container container__projects-swiper">
            <?php get_template_part('parts/projects-swiper', null, []); ?>
        </div>
    </section>

    <section id="about" class="section section__about">
        <div class="container container__about">
            <?php get_template_part('parts/about', null, []); ?>
        </div>
    </section>

    <!-- <section id="posts-instagramm" class="section section__instagram" >
        <div class="container container__instagram">
            <?php get_template_part('parts/posts-instagram', null, []); ?>
        </div>
    </section> -->

    <section id="event-map" class="section container__map">
        <div class="container container-map">
            <?php get_template_part('parts/event-map', null, []); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>