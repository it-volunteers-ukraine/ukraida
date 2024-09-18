<?php get_header();
/*
Template Name: about media
*/
?>


<main>
    <section class="section container about__media">
        <h1 class="about__media-title"><?php echo esc_html(get_field('about_us_in_the_media_title')); ?> </h1>
        <ul class="about__media-list">
            <?php
            $args = array(
                'post_type' => 'post-types-about-med',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $img = get_field('about_media_img');
            ?>
                    <li class="about__media-item">
                        <div class="about__media-wrap">
                            <div class="about__media-img-block">
                                <div class="about__media-img">
                                    <img src="<?php echo $img['url'] ?>" alt="foto">
                                </div>
                                <p class="about__media-avtor"><?php the_field('about_media_title'); ?></p>
                            </div>
                            <div>
                                <h3 class="about__media-name-article"><?php the_field('about_media_name_article'); ?></h3>
                                <p class="about__media-date"><?php the_field('about_media_date'); ?></p>
                                <p class="about__media-text"><?php the_field('about_media_text'); ?></p>
                                <p class="about__media-link">

                                    <a href="#">Перейти на статтю</a>
                                </p>

                            </div>
                        </div>
                    </li>
            <?php
                endwhile;

            endif;

            wp_reset_postdata();
            ?>
        </ul>


    </section>
</main>

<?php get_footer(); ?>