<div class="projects-items">
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

        // Outputting items
        $index = 1;
        while ($query->have_posts()) {
            $query->the_post();
            // Project's item
            get_template_part('parts/projects-page-item', null, ["index" => $index]);
            // hr after every odd post
            if ($index % 2) {
                echo '<hr class="projects-items-hr">';
            }

            $index++;
        }

        // Pagination
        get_template_part(
            'parts/projects-page-pagination', null, ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
        );

        // Resetting postdata
        wp_reset_postdata();
    ?>
</div>