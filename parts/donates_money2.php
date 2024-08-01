<?php
$currend_id = get_the_ID();
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

        // echo get_field('donates_money_title');
        // echo get_field('donates_money_start');

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
                <p class="post-type__value">Потрібно зібрати:</p>
                <p class="post-type__sum"><?php echo get_field('donates_money_sum'); ?></p>
                <div class="post-type__button">
                    <button class="img-text__btn"><?php echo get_field('donates_button_text', $currend_id); ?></button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <!-- <div class="post-type">
        <div class="post-type__wrap">
            <img src="<?php echo  get_template_directory_uri() . '/assets/images/donates/img_dron.jpeg'; ?>" alt="foto">
        </div>
        <div class="post-type__block">
            <p class="post-type__start">
                Розпочато: 00.00.0000
            </p>
            <h3 class="post-type__title">великий збір на дрон для зсу</h3>
            <p class="post-type__text">
                Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <p class="post-type__value">Потрібно зібрати:</p>
            <p class="post-type__sum">0000000</p>
            <div class="post-type__button">
                <button class="img-text__btn">Підтримати збір</button>
            </div>
        </div>
    </div> -->
</section>