<!-- event-map розкоментувати 3 рядок -->

<!-- <div id='js-modal' class="modal">
    <div class="container">
        <div id="js-inner__wrap" class="inner__wrap">
            
            <button id="js-btn-close" type="button" class="btn-clear btn-icon modal__btn-close">
                <svg class="modal__icon-btn">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#close"></use>
                </svg>
            </button>

            <div class="modal__text-wrap">
                <h2 class="modal__title">Міжнародний благодійний фонд "UKRAIDA"</h2>
                <ul class="payment-list">
                    <li class="payment-item">
                        <p class="payment-text">ЄДРПОУ: 00000000</p>
                    </li>
                    <li class="payment-item">
                        <p class="payment-text payment-text--size">IBAN: <span id="js-iban">UA000000000000000000000000</span></p>
                    </li>
                    <li class="payment-item">
                        <p class="payment-text">АТ КБ “Приват Банк”</p>
                    </li>
                </ul>
                <h3 class="modal__subtitle">Призначення платежу:</h3>
                <p class="modal__subtitle-text">“Безповоротна фінансова допомога від ПІБ”</p>
            </div>
            <button id="js-btn-donate-copy" type="button" class="modal__btn-copy">Копіювати IBAN</button>
        </div>
    </div>
</div> -->


<?php
$currend_id = 'option';
?>

<div id="donate-modal" class="modal ">
    <div id="modal-wrap" class="modal-wrap donate-money">
        <button id="js-btn-close" type="button" class="modal_btn-close">
            <!-- <svg class="modal__icon-btn icon"> -->
            <svg class="icon">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-close"></use>
            </svg>
        </button>
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
    </div>
</div>

<Script>
    const themeUrl = "<?php echo esc_url(get_template_directory_uri()); ?>"
    const backgroundImageUrl = "<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/success.svg";
</Script>