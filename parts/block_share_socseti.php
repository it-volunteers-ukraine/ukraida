<?php 
$current_url = get_permalink();
$x_url = "https://x.com/intent/tweet?url=" . $current_url;
$facebook_url = "https://www.facebook.com/sharer/sharer.php?u=" . $current_url;
?>

<h2 class="socseti-title"><?php echo esc_html(get_field('block_socseti_title', 'option')) ?></h2>
<div class="socseti-list">
    <a class="socseti-item" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
        </svg>
    </a>
    <a class="socseti-item" href="<?php echo $facebook_url; ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
        </svg>
    </a>
    <a class="socseti-item" href="<?php echo $x_url; ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
        </svg>
    </a>
</div>