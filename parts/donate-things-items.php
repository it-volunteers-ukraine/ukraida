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

        // Outputting items
        echo '<div class="donate-things-items">';
        while ($query->have_posts()) {
            $query->the_post();
            // Project's item
            get_template_part('parts/donate-things-item', null);
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