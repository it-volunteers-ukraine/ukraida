<?php get_header();
/*
Template Name: our team members
*/
    $title = esc_html(get_field('our_team_members_title'))
?>

<main>
    <section class="section our-team-members">
        <div class="container container__our-team-members">
            <h1 class="our-team-members-title"><?= $title ?></h1>
            <div class="our-team-members-items">
                <?php
                    // Basic args for query
                    $args = array(
                        'post_type'         => 'post-types-our-team-',
                        'posts_per_page'    => 6,
                        'order'             => 'DESC',
                    );
                    //
                    $query = new WP_Query($args);

                    // Outputting items
                    while ($query->have_posts()) {
                        $query->the_post();
                        // Project's item

                        $photo_url = get_field('our_team_member_image');
                        $name = esc_html(get_field('our_team_member_name'));
                        $short_info = esc_html(get_field('our_team_member_short_information'));

                        $instagram_name = esc_html(get_field('our_team_member_instagram_name'));
                        $instagram_link = "https://www.instagram.com/$instagram_name/";
                    ?>
                        <div class="our-team-members-items-item">
                            <img class="our-team-members-items-item-image" src="<?= $photo_url ?>"/>
                            <div class="our-team-members-items-item-info">
                                <span class="our-team-members-items-item-info-name">
                                    <?= $name ?>
                                </span>
                                <span class="our-team-members-items-item-info-short-info">
                                    <?= $short_info ?>
                                </span>
                                <span class="our-team-members-items-item-info-short-info">
                                    <a href="<?= $instagram_link ?>"><?= $instagram_name ?></a>
                                </span>
                            </div>
                        </div>
                    <?php
                    }

                    // Resetting postdata
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>