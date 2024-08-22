<?php
$current_id = get_the_ID();

$img = get_field('donates_money_img');
?>
<div class="result-item">
    <div class="result-card_wrap">
        <div class="result-card_img">
            <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
        </div>
        <div class="result-card">
            <h2 class="result-card_title"><?php echo esc_html(get_field('donates_money_title')); ?></h2>
            <p class="result-card_text"><?php echo esc_html(get_field('donates_money_text')); ?></p>
            <p class="result-card_sum-title"><?php echo get_field('title_archive_sum', $current_id); ?></p>
            <p class="result-card_sum-value"><?php echo esc_html(get_field('donates_money_sum')); ?></p>
        </div>
    </div>
</div>