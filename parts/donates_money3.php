<?php
$currend_id = get_the_ID();
?>
<section class='donate-result'>
    <div class="donate-title__wrap">
        <h2 class="donate-title"><?php the_field('title-result') ?></h2>
        <p><?php the_field('text-result') ?></p>
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
                        <div class="result-item__wrap">
                            <div class="result-item__img">
                                <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
                            </div>
                            <div class="result-item__text">
                                <h4><?php echo esc_html(get_field('donates_money_title')); ?></h4>
                                <div class="result-item__inner">
                                    <p><?php echo esc_html(get_field('donates_money_text')); ?></p>
                                    <div class="result-item__sum">
                                        <p>Загальна сума збору: <br>
                                            <span><?php echo esc_html(get_field('donates_money_sum')); ?></span>
                                        </p>
                                    </div>
                                </div>
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

    <button class="btn" <?php echo $is_end_post_list ? 'hidden' : ''; ?>>
        <?php the_field('btn-result') ?>
    </button>
</section>