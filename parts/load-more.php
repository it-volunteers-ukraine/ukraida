<?php
// Функция для загрузки дополнительных постов
function load_more_posts()
{
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'post_type' => 'post-types-donates-m',
        'posts_per_page' => 2,
        'paged' => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $img = get_field('donates_money_img');
            $actually = get_field('donates_actually');

            if ($actually != 1) : ?>
                <div class="result-item">
                    <div class="result-card_wrap">
                        <div class="result-card_img">
                            <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
                        </div>
                        <div class="result-card">
                            <h2 class="result-card_title"><?php echo esc_html(get_field('donates_money_title')); ?></h2>
                            <p class="result-card_text"><?php echo esc_html(get_field('donates_money_text')); ?></p>
                            <p class="result-card_sum-title"><?php echo get_field('title_archive_sum'); ?></p>
                            <p class="result-card_sum-value"><?php echo esc_html(get_field('donates_money_sum')); ?></p>
                        </div>
                    </div>
                </div>
<?php endif;
        endwhile;
    endif;

    wp_die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
