<?php
$currend_id = 'option';
?>

<h2 class="donate-title"><?php echo get_field('title', $currend_id); ?></h2>
<div class="donate_item">
    <p class="donate_item-title"><?php echo get_field('organisation_title', $currend_id); ?></p>
    <div class="donate_block-text">
        <p class="donate_item-text"><?php echo get_field('organisation_value', $currend_id); ?></p>
        <svg class="donate_icon-copy donate_icon">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy"></use>
        </svg>
        <svg class="donate_icon-success donate_icon is-hidden">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy-success"></use>
        </svg>
        <!-- <div class="donate_text-icon">
        </div> -->
    </div>
</div>
<div class="donate_item">
    <p class="donate_item-title"><?php echo get_field('iban_title', $currend_id); ?></p>
    <div class="donate_block-text">
        <p class="donate_item-text"><?php echo get_field('iban_value', $currend_id); ?></p>
        <svg class="donate_icon-copy donate_icon ">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy"></use>
        </svg>
        <svg class="donate_icon-success donate_icon is-hidden">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy-success"></use>
        </svg>
    </div>
</div>
<div class="donate_item">
    <p class="donate_item-title"><?php echo get_field('payment_destination_title', $currend_id); ?></p>
    <div class="donate_block-text">
        <p class="donate_item-text"><?php echo get_field('payment_destination_value', $currend_id); ?></p>
        <svg class="donate_icon-copy donate_icon ">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy"></use>
        </svg>
        <svg class="donate_icon-success donate_icon is-hidden">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy-success"></use>
        </svg>
    </div>
</div>