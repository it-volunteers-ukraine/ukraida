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
        <?php if (get_field('donates2_button_text', $currend_id) AND get_field('donates2_button_url', $currend_id)) : 
            // Get the current translation for the button's url
            $btn_url = get_field('donates2_button_url', $currend_id);
            $translated_btn_url = PllHelper::get_current_translation($btn_url);
        ?>
            <a href="<?php echo $translated_btn_url; ?>" class="img-text__btn">
                <?php echo get_field('donates2_button_text', $currend_id); ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="don2__swip">
        <!-- <img src="<?php echo  get_template_directory_uri() . '/assets/images/donates/img_don2.jpg'; ?>" alt=''> -->
        <?php get_template_part('parts/donates2-swiper', null, []); ?>
    </div>
</div>