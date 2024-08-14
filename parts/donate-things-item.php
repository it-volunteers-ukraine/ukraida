<?php
    $id = get_the_ID();

    //
    $date_period = get_field("donates_things_date_period");
    $time_period = get_field("donates_things_time_period");
    $dtp = "";
    if ($date_period && $time_period) $dtp = "$date_period, $time_period";
    else if ($date_period) $dtp = $date_period;
    else if ($time_period) $dtp = $time_period;
    //
    $dtp_row = "";
    if ($dtp) {
        $dtp_row = <<<ROW
            <div class="donate-things-item-info-header-dtl-row-dtp">
                <div class="donate-things-item-info-header-dtl-row-dtp-icon-wrap">
                    i
                </div>
                <div class="donate-things-item-info-header-dtl-row-dtp-text-wrap">
                    $dtp
                </div>
            </div>
        ROW;
    }


    //
    $location_iframe = get_field("donates_things_iframe_with_location");
    $location_row = "";
    if ($location_iframe) {
        //
        $href = get_home_url() . "/#event-map";
        $text = __("Локація");
        //
        $location_row = <<<ROW
            <div class="donate-things-item-info-header-dtl-row-l">
                <div class="donate-things-item-info-header-dtl-row-l-icon-wrap">
                    i
                </div>
                <div class="donate-things-item-info-header-dtl-row-l-text-wrap">
                    <a href="$href">$text</a>
                </div>
            </div>
        ROW;
    }
?>
<div class="donate-things-item">
    <div class="donate-things-item-images">
        <?php get_template_part('parts/donate-things-swipers', null, ["idNumber" => $id]); ?>
    </div>
    <div class="donate-things-item-info">
        <div class="donate-things-item-info-header-row">
            <div class="donate-things-item-info-header-title-row">
                <h2 class="donate-things-item-header-title">
                    <?= get_field("donates_things_title") ?>
                </h2>
            </div>
            <div class="donate-things-item-info-header-dtl-row">
                <?= $dtp_row ?>
            </div>
            <div class="donate-things-item-info-header-l-row">
                <?= $location_row ?>
            </div>
        </div>
        <div class="donate-things-item-info-excerpt-row">
            <p class="donate-things-item-info-excerpt">
                <?= get_field("donates_things_text") ?>
            </p>
        </div>
    </div>
</div>