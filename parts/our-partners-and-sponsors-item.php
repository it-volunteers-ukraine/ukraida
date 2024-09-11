<?php
    $id = get_the_ID();

    // Name
    $name = esc_html(get_field("our_partners_and_sponsors_name"));

    // Logo (if available)
    $logo_block = "";
    if (get_field("our_partners_and_sponsors_logo")) {
        $logo_image = get_field("our_partners_and_sponsors_logo");
        $logo_image_tag = ImageHelper::get_image_tag($logo_image, "our-partners-and-sponsors-item-logo");
        $logo_block = <<<BLOCK
            <div class="our-partners-and-sponsors-item-logo-row">
                $logo_image_tag
            </div>
        BLOCK;
    }

    // Description (if available)
    $description_block = "";
    if (get_field("our_partners_and_sponsors_description")) {
        $description_text = esc_html(get_field("our_partners_and_sponsors_description"));
        $description_block = <<<BLOCK
            <div class="our-partners-and-sponsors-item-info-description-row">
                <p class="our-partners-and-sponsors-item-info-description">
                    $description_text
                </p>
            </div>
        BLOCK;
    }

    // Link to website (if available)
    $website_block = "";
    if (get_field("our_partners_and_sponsors_site")) {
        $website_url = esc_html(get_field("our_partners_and_sponsors_site"));
        $link_text = $args["go_to_site_text"];
        $website_block = <<<BLOCK
            <div class="our-partners-and-sponsors-item-info-website-row">
                <a
                    class="our-partners-and-sponsors-item-info-website"
                    href="$website_url"
                    target="_blank"
                    rel="noreferrer"
                >
                    $link_text
                </a>
            </div>
        BLOCK;
    }

?>
<div class="our-partners-and-sponsors-item">
    <?= $logo_block ?>
    <div class="our-partners-and-sponsors-item-info">
        <div class="our-partners-and-sponsors-item-info-name-row">
            <h2 class="our-partners-and-sponsors-item-info-name">
                <?= $name ?>
            </h2>
        </div>
        <?= $description_block ?>
        <?= $website_block ?>
    </div>
</div>