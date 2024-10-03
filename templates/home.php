<?php
/*
Template Name: home
*/
get_header();
$current_id = get_the_ID();
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

    <section class="section section__instagram">
        <div class="container container__instagram">
            <?php get_template_part('parts/posts-instagram', null, []); ?>

            <h2 style="margin-top: 100px; text-align: center;">Feed Them Social - Page, Post, Video and Photo Galleries. Basic setting</h3>
            <?php
            $shortcode = get_field('short_code_feed_them_social', $current_id); 
            // echo 'shortcode=' . $shortcode;
            // echo $shortcode;
            echo do_shortcode($shortcode);
            // echo do_shortcode('[feed_them_social cpt_id=535]');
            // echo do_shortcode('[feed_them_social cpt_id=541]');
            ?>
            <h2 style="margin-top: 100px; text-align: center;">Feed Them Social - Page, Post, Video and Photo Galleries. Buisnes setting</h3>
            <?php
            $shortcode = get_field('short_code_feed_them_social_buisness', $current_id); 
            echo do_shortcode($shortcode);

            // echo do_shortcode('[feed_them_social cpt_id=535]');
            // echo do_shortcode('[feed_them_social cpt_id=541]');
            ?>
            <h2 style="margin-top: 100px; text-align: center;">Instagram Feed от Smash Balloon</h3>
            <?php
            // echo do_shortcode('[feed_them_social cpt_id=535]');
            echo do_shortcode('[instagram-feed feed=2]');
            ?>
            <h2 style="margin-top: 100px; text-align: center;">Instagram Feed от Smash Balloon Oembeds</h3>
            <?php
            $instagram_url = 'https://www.instagram.com/p/C_AY9RetP6n/';
            echo wp_oembed_get($instagram_url);
            // echo do_shortcode('[feed_them_social cpt_id=535]');
            ?>
        </div>
    </section>

    <section id="event-map" class="section container__map">
        <div class="container container-map">
            <?php get_template_part('parts/event-map', null, []); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>