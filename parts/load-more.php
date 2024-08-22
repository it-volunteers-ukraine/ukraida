<?php
// Функция для загрузки дополнительных постов
function load_more_posts()
{
    $current_id = get_the_ID();
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $per_page = 2;
    $args = array(
        'post_type' => 'post-types-donates-m',
        'posts_per_page' => $per_page,
        'paged' => $paged,
        'meta_key' => 'donates_actually',
        'meta_value' => 0,

    );

    $query = new WP_Query($args); ?>
    <?php
    if ($query->have_posts()) : ?>
        <span id="res-params" hidden data-total-post='<?php echo $query->found_posts; ?>' data-current-page='<?php echo $paged; ?> '></span>
        <?php 
        echo $current_id;

        while ($query->have_posts()) {
            $query->the_post();
            $actually = get_field('donates_actually');
            get_template_part('parts/donates_money_result_card');
        }
        wp_reset_postdata();
    endif; 

    wp_die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
