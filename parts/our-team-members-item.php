<?php
    // Item for our team's member

    // Photo image
    $photo_image = get_field('our_team_member_image');
    $photo_image_block = ImageHelper::get_image_tag($photo_image, "our-team-members-items-item-image");

    // Name and short info
    $name = esc_html(get_field('our_team_member_name'));
    $short_info = esc_html(get_field('our_team_member_short_information'));
    // Instagram block (link and name)
    $instagram_name = esc_html(get_field('our_team_member_instagram_name'));
    $instagram_block = "";
    if ($instagram_name) {
        $instagram_link = "https://www.instagram.com/$instagram_name/";
        $instagram_block = <<<BLOCK
            <span class="our-team-members-items-item-info-instagram">
                <a href="$instagram_link" target="_blank" rel="noopener noreferrer">
                    @$instagram_name
                </a>
            </span>
        BLOCK;
    }
?>
<div class="our-team-members-items-item">
    <?= $photo_image_block ?>
    <div class="our-team-members-items-item-wrap">
        <div class="our-team-members-items-item-info">
            <span class="our-team-members-items-item-info-name">
                <?= $name ?>
            </span>
            <div class="our-team-members-items-item-info-wrap">
                <span class="our-team-members-items-item-info-short-info">
                    <?= $short_info ?>
                </span>
                <?= $instagram_block ?>
            </div>
        </div>
    </div>
</div>