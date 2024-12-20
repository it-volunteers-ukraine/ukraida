<?php
$current_id = get_the_ID();
?>

<section class="donate-result">
    <div class="result-title__wrap">
        <h2 class="result_title"><?php the_field('title-result'); ?></h2>
        <p class="result_text"><?php the_field('text-result'); ?></p>
    </div>
    <div class="result__container" id="donate-post-container">
        <?php
        $args = array(
            'post_type' => 'post-types-donates-m',
            'posts_per_page' => -1, // Получаем все посты
        );
        $query = new WP_Query($args);

        $filtered_posts = []; // Создаем массив для хранения отфильтрованных постов

        // Фильтрация постов
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $actually = get_field('donates_actually');

                if ($actually != 1) {
                    $filtered_posts[] = $query->post; // Добавляем пост в массив, если $actually не равно 1
                }
            }
            wp_reset_postdata();
        }

        // Выводим только первые 2 отфильтрованных поста
        $initial_posts = array_slice($filtered_posts, 0, 2);

        if (!empty($initial_posts)) :
            foreach ($initial_posts as $post) :
                setup_postdata($post);
                $img = get_field('donates_money_img');
                $title_archive_sum = get_field('title_archive_sum', $current_id);
        ?>
                <div class="result-item">
                    <div class="result-card_wrap">
                        <div class="result-card_img">
                            <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
                        </div>
                        <div class="result-card">
                            <div class="result-card_text-wrap">
                                <h2 class="result-card_title"><?php echo esc_html(get_field('donates_money_title')); ?></h2>
                                <p class="result-card_text"><?php echo esc_html(get_field('donates_money_text')); ?></p>
                            </div>
                            <div class=result-card_sum-wrap>
                                <p class="result-card_sum-title"><?php echo esc_html($title_archive_sum); ?></p>
                                <p class="result-card_sum-value"><?php echo esc_html(get_field('donates_money_sum')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>

    <?php
    // Проверяем, есть ли больше постов для загрузки
    if (count($filtered_posts) > 2) : ?>
        <button class="btn-load-more" id="load-more-posts">
            <?php the_field('btn_load_more'); ?>
        </button>
    <?php endif; ?>
</section>