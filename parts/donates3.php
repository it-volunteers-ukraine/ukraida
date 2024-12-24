<?php
$currend_id = get_the_ID();
?>

<div class="donate3">
    <?php
        // Reports
        $reports_page_url = esc_url(get_field('donates3_report_page', $currend_id));
        $report_page_id = url_to_postid($reports_page_url);

        //
        $have_reports = have_rows('files', $report_page_id);
        if ($have_reports) :
            // Title
            ?>
                <div class="donate3-wrap">
                    <h2 class="donate3-title"><?php echo get_field('donates3_report_title', $currend_id); ?></h2>
                    <?php

                    // List of reports
                    ?>
                        <ul class="donate3-list">
                            <?php
                                $count = 0;
                                while (have_rows('files', $report_page_id)) : the_row();
                                    // First two only
                                    $count++;
                                    if ($count > 2) break;
                                    ?>
                                        <li class="donate3-item">
                                            <a href="<?php echo esc_url(get_sub_field('file')['url']); ?>" class="donate3-link" target="_blank">
                                                <svg class="donate3-icon">
                                                    <use 
                                                        xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-report">
                                                    </use>
                                                </svg>
                                                <p class="donate3-text"><?php echo get_sub_field('title'); ?></p>
                                            </a>
                                        </li>
                                    <?php
                                endwhile;
                            ?>
                        </ul>
                    <?php

                    // Button to separate page
                    if (get_field('donates3_report_btn_name', $currend_id)):
                        ?>
                            <a href="<?= $reports_page_url ?>" class="donate3-btn">
                                <?php echo get_field('donates3_report_btn_name', $currend_id); ?>
                            </a>
                    <?php endif; ?>
                </div>
            <?php
        endif;

        // Receipts
        $receipts_page_url = esc_url(get_field('donates3_zvit_page', $currend_id));
        $receipts_page_id = url_to_postid($receipts_page_url);
        if (have_rows('files', $receipts_page_id)) :
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
                                $count = 0;
                                while (have_rows('files', $receipts_page_id)) : the_row();
                                    // First two only
                                    $count++;
                                    if ($count > 2) break;
                                    ?>
                                        <li class="donate3-item">
                                            <a href="<?php echo esc_url(get_sub_field('file')['url']); ?>" class="donate3-link" target="_blank">
                                                <svg class="donate3-icon">
                                                    <use 
                                                        xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-receipt">
                                                    </use>
                                                </svg>
                                                <p class="donate3-text"><?php echo get_sub_field('title'); ?></p>
                                            </a>
                                        </li>
                                    <?php
                                endwhile;
                            ?>
                        </ul>
                    <?php

                    // Button to separate page
                    if (get_field('donates3_zvit_btn_name', $currend_id)):
                        ?>
                            <a href="<?= $receipts_page_url ?>" class="donate3-btn">
                                <?php echo get_field('donates3_zvit_btn_name', $currend_id); ?>
                            </a>
                    <?php endif; ?>
                </div>
            <?php
        endif;
    ?>
</div>
<!-- <div class="item button-jittery" style="--bg-color: #f1c40f;">
    <button class="btn-test">Spende</button>
</div> -->