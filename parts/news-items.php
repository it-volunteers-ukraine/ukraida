<div class="news-items-and-pagination">
    <?php
        //
        $paged = max(get_query_var('paged'), 1);

        // Basic args for query
        $args = array(
            'paged'             => $paged,
            'post_type'         => ['event', 'post-types-one-news'],
            'posts_per_page'    => 6,
            'order'             => 'DESC',
        );

        $query = new WP_Query($args);

        // Texts
        $currend_id = get_the_ID();
        $type_news_text = acf_esc_html(get_field('type_news_text', $currend_id));
        $type_news_link_text = acf_esc_html(get_field('type_news_link_text', $currend_id));
        $type_event_text = acf_esc_html(get_field('type_event_text', $currend_id));
        $type_event_link_text = acf_esc_html(get_field('type_event_link_text', $currend_id));

        // Outputting items
        echo '<div class="news-items">';
        while ($query->have_posts()) {
            //
            $query->the_post();
            //
            $post_type = get_post_type();
            //
            if ($post_type === "event") {
                get_template_part(
                    'parts/news-item-event',
                    null,
                    [
                        "texts" => [
                            "type" => $type_event_text,
                            "link_title" => $type_event_link_text,
                        ],
                    ],
                );
            } else {
                if ($post_type === "post-types-one-news") {
                    get_template_part(
                        'parts/news-item-news',
                        null,
                        [
                            "texts" => [
                                "type" => $type_news_text,
                                "link_title" => $type_news_link_text,
                            ],
                        ],
                    );
                }
            }
        }
        echo '</div>';

        // Pagination
        get_template_part(
            'parts/news-pagination', null, ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
        );

        // Resetting postdata
        wp_reset_postdata();
    ?>
</div>