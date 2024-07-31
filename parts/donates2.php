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
        <a class="social-media__link" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank" rel="noopener noreferrer">
            <svg class="social__icon">
                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
            </svg>@<?php the_field('instagram', 'option') ?>
        </a>
        <a class="social-media__link" href="mailto:<?php the_field('email', 'option') ?>" target="_blank" rel="noopener noreferrer">
            <svg class="social__icon">
                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-email"></use>
            </svg>
                <?php echo get_field('email', 'option'); ?>
        </a>
        <a style="margin-top: 30px" href="/devpage" class="img-text__btn"><?php echo get_field('donates2_button_text', $currend_id); ?></a> 
    </div>
    <div class="don2__swip">
        <!-- <img src="<?php echo  get_template_directory_uri() . '/assets/images/donates/img_don2.jpg'; ?>" alt=''> -->
        <?php get_template_part('parts/donates2-swiper', null, []); ?>
    </div>
</div>