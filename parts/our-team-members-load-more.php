<?php
    // Returns project items based on query
    function our_team_members_get_items() {
        // Extracting query parameters
        $offset = $_GET['offset'] ? intval($_GET['offset']) : 0;
        $count = $_GET['count'] ? intval($_GET['count']) : 6;
        // Basic args for query
        $args = array(
            'post_type'         => 'post-types-our-team-',
            'posts_per_page'    => $count,
            'offset'            => $offset,
            'meta_key'          => 'our_team_member_order_rank',
            'orderby'           => ['meta_value_num' => 'ASC', 'date' => 'DESC'],
            'order'             => 'ASC',
        );

        // Query and items output
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            // Project's item
            get_template_part('parts/our-team-members-item');
        }
        wp_reset_postdata();

        wp_die();
    }

    // AJAX handlers for the action
    add_action('wp_ajax_our_team_members_get_items', 'our_team_members_get_items');
    add_action('wp_ajax_nopriv_our_team_members_get_items', 'our_team_members_get_items');