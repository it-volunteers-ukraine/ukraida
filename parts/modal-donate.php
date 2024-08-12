<!-- event-map розкоментувати 3 рядок -->

<?php
$currend_id = 'option';
?>

<div id="donate-modal" class="modal ">
    <div id="modal-wrap" class="modal-wrap donate-money">
        <button id="js-btn-close" type="button" class="modal_btn-close">
            <!-- <svg class="modal__icon-btn icon"> -->
            <svg class="icon">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-close"></use>
            </svg>
        </button>
        <h2 class="donate-title"><?php echo get_field('title', $currend_id); ?></h2>
        <div class="donate_item">
            <p class="donate_item-title"><?php echo get_field('organisation_title', $currend_id); ?></p>
            <div class="donate_block-text">
                <p class="donate_item-text"><?php echo get_field('organisation_value', $currend_id); ?></p>
                <svg class="donate_icon-copy donate_icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy"></use>
                </svg>
                <svg class="donate_icon-success donate_icon is-hidden">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy-success"></use>
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
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy"></use>
                </svg>
                <svg class="donate_icon-success donate_icon is-hidden">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy-success"></use>
                </svg>
            </div>
        </div>
        <div class="donate_item">
            <p class="donate_item-title"><?php echo get_field('payment_destination_title', $currend_id); ?></p>
            <div class="donate_block-text">
                <p class="donate_item-text"><?php echo get_field('payment_destination_value', $currend_id); ?></p>
                <svg class="donate_icon-copy donate_icon ">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy"></use>
                </svg>
                <svg class="donate_icon-success donate_icon is-hidden">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-copy-success"></use>
                </svg>
            </div>
        </div>
    </div>
</div>

<Script>
    const themeUrl = "<?php echo esc_url(get_template_directory_uri()); ?>"
    const backgroundImageUrl = "<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/success.svg";
</Script>