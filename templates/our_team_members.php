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
                        get_template_part('parts/our-team-members-item');
                    }

                    // Resetting postdata
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>