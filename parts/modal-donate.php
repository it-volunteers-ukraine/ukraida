<!-- event-map розкоментувати 3 рядок -->

<div id='js-modal' class="modal">
    <div class="container">
        <div id="js-inner__wrap" class="inner__wrap">
            <!-- button-close -->
            <button id="js-btn-close" type="button" class="btn-clear btn-icon modal__btn-close">
                <svg class="modal__icon-btn"><use href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#close"></use></svg>
            </button>

            <!-- text -->
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
            <!-- button-copy -->
            <button id="js-btn-donate-copy" type="button" class="modal__btn-copy">Копіювати IBAN</button>
        </div>
    </div>
</div>