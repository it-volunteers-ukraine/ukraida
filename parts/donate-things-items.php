<div class="donate-things-items-and-pagination">
    <?php
        //
        $paged = max(get_query_var('paged'), 1);

        // Basic args for query
        $args = array(
            'paged'             => $paged,
            'post_type'         => 'post-types-donates-t',
            'posts_per_page'    => 2,
            'order'             => 'DESC',
        );

        $query = new WP_Query($args);

        // Text
        $currend_id = get_the_ID();
        $location_text = acf_esc_html(get_field('location_text__donate-things', $currend_id));

        // Outputting items
        echo '<div class="donate-things-items">';
        while ($query->have_posts()) {
            $query->the_post();
            // Project's item
            get_template_part(
                'parts/donate-things-item',
                null,
                [
                    "location_text" => $location_text,
                ]
            );
        }
        echo '</div>';

        // Pagination
        get_template_part(
            'parts/donate-things-pagination', null, ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
        );

        // Resetting postdata
        wp_reset_postdata();
    ?>
</div>