<h2 class="socseti-title"><?php echo esc_html(get_field('block_socseti_title', 'option')) ?></h2>
<div class="socseti-list">
    <a class="socseti-item" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
        </svg>
    </a>
    <a class="socseti-item" href="<?php the_field('facebook_link', 'option') ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
        </svg>
    </a>
    <a class="socseti-item" href="<?php the_field('xtwitter_link', 'option') ?>" target="_blank">
        <svg class="socseti-icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
        </svg>
    </a>
</div>