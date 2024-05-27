<?php
$currend_id = get_the_ID();
?>

<div class="donate1 ">
    <div class="donate-money">
        <?php get_template_part('parts/donates_money', null, []); ?>
    </div>
    <div class="textblock">
        <h2 class="textblock-title"><?php echo get_field('global_title', $currend_id); ?></h2>
        <p class="textblock-text"><?php echo get_field('donates1_text', $currend_id); ?></p>
        <a href="/devpage" class="textblock-btn"><?php echo get_field('donates1_btn_name', $currend_id); ?></a>
    </div>
</div>