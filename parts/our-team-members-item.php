<?php
    // Item for our team's member

    //
    $photo_url = get_field('our_team_member_image');
    $name = esc_html(get_field('our_team_member_name'));
    $short_info = esc_html(get_field('our_team_member_short_information'));
    //
    $instagram_name = esc_html(get_field('our_team_member_instagram_name'));
    $instagram_link = "https://www.instagram.com/$instagram_name/";
?>
<div class="our-team-members-items-item">
    <img class="our-team-members-items-item-image" src="<?= $photo_url ?>"/>
    <div class="our-team-members-items-item-wrap">
        <div class="our-team-members-items-item-info">
            <span class="our-team-members-items-item-info-name">
                <?= $name ?>
            </span>
            <div class="our-team-members-items-item-info-wrap">
                <span class="our-team-members-items-item-info-short-info">
                    <?= $short_info ?>
                </span>
                <span class="our-team-members-items-item-info-instagram">
                    <a href="<?= $instagram_link ?>"><?= "@$instagram_name" ?></a>
                </span>
            </div>
        </div>
    </div>
</div>