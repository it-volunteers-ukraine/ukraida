<?php
$currend_id = get_the_ID();
?>

<div class="donate3">
    <div class="donate3-wrap">
        <h2 class="donate3-title"><?php echo get_field('donates3_report_title', $currend_id); ?></h2>
        <!-- <?php echo (get_field('donates3_report1', $currend_id)['url']); ?> -->
        <ul class="donate3-list">
            <li class="donate3-item">
                <a href="<?php echo esc_url(get_field('donates3_report1', $currend_id)['url']); ?>" class="donate3-link" target="_blank">
                    <svg class="donate3-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-report"></use>
                    </svg>
                    <p class="donate3-text"><?php echo get_field('donates3_report1_period', $currend_id); ?></p>
                </a>
            </li>
            <li class="donate3-item">
                <a href="<?php echo esc_url(get_field('donates3_report2', $currend_id)['url']); ?>" class="donate3-link" target="_blank">
                    <svg class="donate3-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-report"></use>
                    </svg>
                    <p class="donate3-text"><?php echo get_field('donates3_report2_period', $currend_id); ?></p>
                </a>
            </li>
        </ul>
        <?php if (get_field('donates3_zvit_btn_name', $currend_id)): ?>
            <a href="/devpage" class="donate3-btn"><?php echo get_field('donates3_report_btn_name', $currend_id); ?></a>
        <?php endif; ?>
    </div>
    <div class="separator"></div>
    <div class="donate3-wrap">
        <h2 class="donate3-title"><?php echo get_field('donates3_zvit_title', $currend_id); ?></h2>
        <ul class="donate3-list">
            <li class="donate3-item">
                <a href="<?php echo esc_url(get_field('donates3_zvit1', $currend_id)['url']); ?>" class="donate3-link" target="_blank">
                    <svg class="donate3-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-receipt"></use>
                    </svg>
                    <p class="donate3-text"><?php echo get_field('donates3_zvit1_period', $currend_id); ?></p>
                    <!-- <p class="donate3-text">Квитанція за</p> -->
                </a>
            </li>
            <li class="donate3-item">
                <a href="<?php echo esc_url(get_field('donates3_zvit2', $currend_id)['url']); ?>" class="donate3-link" target="_blank">
                    <svg class="donate3-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-receipt"></use>
                    </svg>
                    <p class="donate3-text"><?php echo get_field('donates3_zvit2_period', $currend_id); ?></p>
                    <!-- <p class="donate3-text">Квитанція за</p> -->
                </a>
            </li>
        </ul>
        <?php if (get_field('donates3_zvit_btn_name', $currend_id)): ?>
            <a href="/devpage" class="donate3-btn"><?php echo get_field('donates3_zvit_btn_name', $currend_id); ?></a>
        <?php endif; ?>
    </div>
</div>
<!-- <div class="item button-jittery" style="--bg-color: #f1c40f;">
    <button class="btn-test">Spende</button>
</div> -->