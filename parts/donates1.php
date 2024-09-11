<?php
$currend_id = get_the_ID();
?>

<div class="donate1 ">
    <div class="donate-money">
        <?php get_template_part('parts/donates_money', null, []); ?>
    </div>
    <div class="textblock">
        <h2 class="textblock-title"><?php echo get_field('donates1_title', $currend_id); ?></h2>
        <p class="textblock-text"><?php echo get_field('donates1_text', $currend_id); ?></p>
        <?php if (get_field('donates1_btn_name', $currend_id) AND get_field('donates1_btn_url', $currend_id)  ) : 
            // Get the current translation for the button's url
            $btn_url = get_field('donates1_btn_url', $currend_id);
            $translated_btn_url = PllHelper::get_current_translation($btn_url);
        ?>
            <a href="<?php echo $translated_btn_url; ?>" class="textblock-btn">
                <?php echo get_field('donates1_btn_name', $currend_id); ?>
            </a>
        <?php endif ?>
    </div>
</div>