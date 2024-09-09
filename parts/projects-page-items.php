<div class="projects-items-and-pagination">
    <?php
        //
        $paged = max(get_query_var('paged'), 1);

        // Basic args for query
        $args = array(
            'paged'             => $paged,
            'post_type'         => 'post-types-project',
            'posts_per_page'    => 2,
            'order'             => 'DESC',
        );

        // Is active filter
        $isActive = $_GET["is_active"] ?? "all";
        if ($isActive == 'inactive') {
            $args['meta_key'] = 'project_is_active';
            $args['meta_value'] = 0;
        } else if ($isActive == 'active') {
            $args['meta_key'] = 'project_is_active';
            $args['meta_value'] = 1;
        }

        $query = new WP_Query($args);

        // Texts
        $currend_id = get_the_ID();
        $active_text = acf_esc_html(get_field('projects_active_text', $currend_id));
        $inactive_text = acf_esc_html(get_field('projects_inactive_text', $currend_id));
        $detailed_information_text = acf_esc_html(get_field('projects_detailed_information_text', $currend_id));

        // Outputting items
        $index = 1;
        echo '<div class="projects-items">';
        while ($query->have_posts()) {
            $query->the_post();
            // Project's item
            get_template_part(
                'parts/projects-page-item',
                null,
                [
                    "index" => $index,
                    "texts" => [
                        "active" => $active_text,
                        "inactive" => $inactive_text,
                        "detailed_information" => $detailed_information_text,
                    ],
                ],
            );
            // Line after odd items, but only if there are more posts
            if (($index % 2) && ($query->current_post + 1 < $query->post_count)) {
                echo '<hr class="projects-items-hr" />';
            }

            $index++;
        }
        echo '</div>';

        // Pagination
        get_template_part(
            'parts/projects-page-pagination', null, ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
        );

        // Resetting postdata
        wp_reset_postdata();
    ?>
</div>