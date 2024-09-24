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
            // Получаем текущую страницу
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Параметры для вывода постов (по 4 поста на странице)
            $args = array(
                'post_type' => 'post-types-about-med',
                'posts_per_page' => 4, // Количество постов на странице
                'paged' => $paged, // Текущая страница
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
                ?>
        </ul>

        <!-- Pagination -->
        <div class="about__media-pagination">
            <?php
                get_template_part(
                    'parts/projects-page-pagination',
                    null,
                    ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
                );
            ?>
        </div>



    <?php
            else :
                echo '<p>' . __('Нет публикаций') . '</p>';
            endif;
            // Сбрасываем данные поста
            wp_reset_postdata();
    ?>
    </section>
</main>

<?php get_footer(); ?>