<?php
$current_id = get_the_ID();
// $current_id = get_queried_object_id();
// echo $current_id;
// global $post;
// $post_id = $post->ID;
// echo $post_id;
// global $currend_id;

$img = get_field('donates_money_img');
?>
<div class="result-item">
    <p><?php print_r(acf_get_field('title_archive_sum')); ?></p>
    <div class="result-card_wrap">
        <div class="result-card_img">
            <img src="<?php echo esc_url($img['url']); ?>" alt="foto">
        </div>
        <div class="result-card">
            <h2 class="result-card_title"><?php echo esc_html(get_field('donates_money_title')); ?></h2>
            <p class="result-card_text"><?php echo esc_html(get_field('donates_money_text')); ?></p>
            <p class="result-card_sum-title"><?php echo acf_get_field('title_archive_sum')['label']; ?></p>
            <p class="result-card_sum-value"><?php echo esc_html(get_field('donates_money_sum')); ?></p>
        </div>
    </div>
</div>