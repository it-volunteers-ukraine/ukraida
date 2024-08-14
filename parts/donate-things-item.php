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
        $dtp_svg_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-calendar";
        $dtp_row = <<<ROW
            <div class="donate-things-item-info-header-dtl-row-dtp">
                <div class="donate-things-item-info-header-dtl-row-dtp-icon-wrap">
                    <svg class="donate-things-item-info-header-dtl-row-dtp-icon-svg">
                        <use xlink:href="$dtp_svg_href"></use>
                    </svg>
                </div>
                <div class="donate-things-item-info-header-dtl-row-dtp-text-wrap">
                    <p class="donate-things-item-info-header-dtl-row-dtp-text">$dtp</p>
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
        $location_svg_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-location";
        $location_row = <<<ROW
            <div class="donate-things-item-info-header-dtl-row-l">
                <div class="donate-things-item-info-header-dtl-row-l-icon-wrap">
                    <svg class="donate-things-item-info-header-dtl-row-l-icon-svg">
                        <use xlink:href="$location_svg_href"></use>
                    </svg>
                </div>
                <div class="donate-things-item-info-header-dtl-row-l-link-wrap">
                    <a class="donate-things-item-info-header-dtl-row-l-link" href="$href">$text</a>
                </div>
            </div>
        ROW;
    }

    //
    $dtl_row = "";
    if (($dtp_row) || ($location_row)) {
        $dtl_row = <<<ROW
            <div class="donate-things-item-info-header-dtl-row">
                $dtp_row
                $location_row
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
            <?= $dtl_row ?>
        </div>
        <div class="donate-things-item-info-text-row">
            <p class="donate-things-item-info-text">
                <?= get_field("donates_things_text") ?>
            </p>
        </div>
    </div>
</div>