<?php
$currend_id = get_the_ID();
?>

<div class="don2__wrap">
    <div class="don2__block">
        <div class="don2__title">
            <?php echo get_field('donates2_title', $currend_id); ?>
        </div>
        <div class="don2__text">
            <?php echo get_field('donates2_text', $currend_id); ?>
        </div>
        <a href="/devpage" class="img-text__btn"><?php echo get_field('donates2_button_text', $currend_id); ?></a>
    </div>
    <div class="don2__swip">
        <!-- <img src="<?php echo  get_template_directory_uri() . '/assets/images/donates/img_don2.jpg'; ?>" alt=''> -->
        <?php get_template_part('parts/donates2-swiper', null, []); ?>
    </div>
</div>