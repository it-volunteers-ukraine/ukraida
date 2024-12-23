<?php
$currend_id = get_the_ID();
?>

<div class="donate3">
    <?php
        // Reports
        // Basic args for query
        $args = array(
            'post_type'         => 'post-types-reports',
            'posts_per_page'    => 2,
            'meta_key'          => 'sort_by',
            'meta_type'         => 'DATETIME',
            'orderby'           => ['meta_value' => 'DESC'],
        );

        // Query and items output
        $query = new WP_Query($args);
        $have_reports = $query->have_posts();
        if ($have_reports) {
            // Title
            ?>
                <div class="donate3-wrap">
                    <h2 class="donate3-title"><?php echo get_field('donates3_report_title', $currend_id); ?></h2>
                    <?php

                    // List of reports
                    ?>
                        <ul class="donate3-list">
                            <?php
                                while ($query->have_posts()) {
                                    $query->the_post();

                                    ?>
                                        <li class="donate3-item">
                                            <a href="<?php echo esc_url(get_field('file')['url']); ?>" class="donate3-link" target="_blank">
                                                <svg class="donate3-icon">
                                                    <use 
                                                        xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-report">
                                                    </use>
                                                </svg>
                                                <p class="donate3-text"><?php echo get_field('name'); ?></p>
                                            </a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    <?php

                    // Button to separate page
                    if (get_field('donates3_report_btn_name', $currend_id)):
                        $reports_page_url = esc_url(get_field('donates3_report_page', $currend_id));
                        ?>
                            <a href="<?= $reports_page_url ?>" class="donate3-btn">
                                <?php echo get_field('donates3_report_btn_name', $currend_id); ?>
                            </a>
                    <?php endif; ?>
                </div>
            <?php
        }
        wp_reset_postdata();

        // Receipts
        // Basic args for query
        $args = array(
            'post_type'         => 'post-types-receipts',
            'posts_per_page'    => 2,
            'meta_key'          => 'sort_by',
            'meta_type'         => 'DATETIME',
            'orderby'           => ['meta_value' => 'DESC'],
        );

        // Query and items output
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            // Separator if there were reports
            if ($have_reports) echo '<div class="separator"></div>';

            // Title
            ?>
                <div class="donate3-wrap">
                    <h2 class="donate3-title"><?php echo get_field('donates3_zvit_title', $currend_id); ?></h2>
                    <?php

                    // List of receipts
                    ?>
                        <ul class="donate3-list">
                            <?php
                                while ($query->have_posts()) {
                                    $query->the_post();

                                    ?>
                                        <li class="donate3-item">
                                            <a href="<?php echo esc_url(get_field('file')['url']); ?>" class="donate3-link" target="_blank">
                                                <svg class="donate3-icon">
                                                    <use 
                                                        xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-receipt">
                                                    </use>
                                                </svg>
                                                <p class="donate3-text"><?php echo get_field('name'); ?></p>
                                            </a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    <?php

                    // Button to separate page
                    if (get_field('donates3_zvit_btn_name', $currend_id)):
                        $reports_page_url = esc_url(get_field('donates3_zvit_page', $currend_id));
                        ?>
                            <a href="<?= $reports_page_url ?>" class="donate3-btn">
                                <?php echo get_field('donates3_zvit_btn_name', $currend_id); ?>
                            </a>
                    <?php endif; ?>
                </div>
            <?php
        }
        wp_reset_postdata();
    ?>
</div>
<!-- <div class="item button-jittery" style="--bg-color: #f1c40f;">
    <button class="btn-test">Spende</button>
</div> -->