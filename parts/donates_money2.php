<?php
$current_id = get_the_ID();
?>

<section class="post-section">

    <?php
    $args = array(
        'post_type' => 'post-types-donates-m',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);

    while ($query->have_posts()) {
        $query->the_post();
        $img = get_field('donates_money_img');
        $actually = get_field('donates_actually');

        $sum_collected = get_field('donates_money_sum');
        $sum_target = get_field('donates_money_sum_end');

        // echo get_field('donates_money_title');
        // echo get_field('donates_money_start');
        // echo get_field('donates_actually');

        if ($actually == 1) {

    ?>
            <div class="post-type">
                <div class="post-type__wrap">
                    <!-- <img src="<?php echo  get_template_directory_uri() . '/assets/images/donates/img_dron.jpeg'; ?>" alt="foto"> -->
                    <img src="<?php echo $img['url'] ?>" alt="foto">
                </div>
                <div class="post-type__block">
                    <p class="post-type__start">
                        <?php echo get_field('donates_money_start'); ?>
                    </p>
                    <h3 class="post-type__title">
                        <?php echo get_field('donates_money_title'); ?>
                    </h3>
                    <p class="post-type__text">
                        <?php echo get_field('donates_money_text'); ?>
                    </p>
                    <div class="post-type__progress">
                        <div class="post-type__progress-bar"></div>
                    </div>
                    <div class="post-type__money">
                        <div>
                            <p class="post-type__value"><?php echo get_field('title_active_sum', $current_id); ?></p>
                            <p class="post-type__sum colected-sum" data-sum='<?php echo $sum_collected; ?>'>0</p>
                        </div>
                        <div>
                            <p class="post-type__value"><?php echo get_field('title_active_sum_end', $current_id); ?></p>
                            <p class="post-type__sum total-sum"><?php echo $sum_target; ?></p>
                        </div>
                    </div>
                    <div class="post-type__button">
                        <button class="menu__btn js-btn-donate"><?php echo get_field('donates_button_text', $current_id); ?></button>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>

</section>

<?php
// Reset $post after WP_Query
wp_reset_postdata();
