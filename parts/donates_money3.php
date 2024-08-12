<?php
$current_id = get_the_ID();
?>
<section class='donate-result'>
    <div class="result-title__wrap">
        <h2 class="result_title"><?php the_field('title-result') ?></h2>
        <p class="result_text"><?php the_field('text-result') ?></p>
    </div>
    <div class="result__container">
        <?php
        $category_name = 'result';
        $category_id = get_cat_ID($category_name);

        $params = array(
            'posts_per_page' => 2,
            'category_name'  => $category_name,
            'order'          => 'DESC',
            'post_type'      => 'post',
            'suppress_filters' => true,
        );

        $page = 137;
        $query1 = new WP_Query($params);
        $max_pages = $query1->max_num_pages;
        $is_end_post_list = $page == $max_pages;

        if ($query1->have_posts()) {
            while ($query1->have_posts()) {
                $query1->the_post();
        ?>

        <?php
            }
            wp_reset_postdata();
        }
        ?>

        <?php
        $args = array(
            'post_type' => 'post-types-donates-m',
            'posts_per_page' => -1,
        );
        $query2 = new WP_Query($args);

        if ($query2->have_posts()) {
            while ($query2->have_posts()) {
                $query2->the_post();
                $img = get_field('donates_money_img');
                $actually = get_field('donates_actually');

                if ($actually == 0) {
        ?>
                    <div class="result-item">
                        <div class="result-card_wrap">
                            <div class="result-card_img">
                                <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
                            </div>
                            <div class="result-card">
                                <h2 class="result-card_title"><?php echo esc_html(get_field('donates_money_title')); ?></h2>
                                <p class="result-card_text"><?php echo esc_html(get_field('donates_money_text')); ?></p>
                                <!-- <div class="result-item__inner"> -->
                                <!-- </div> -->
                                <p class="result-card_sum-title"><?php echo get_field('title_archive_sum', $current_id); ?></p>
                                <p class="result-card_sum-value"><?php echo esc_html(get_field('donates_money_sum')); ?></p>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
            wp_reset_postdata();
        }
        ?>
    </div>

    <button class="btn-load-more" <?php echo $is_end_post_list ? 'hidden' : ''; ?>>
        <?php the_field('btn_load_more') ?>
    </button>
</section>