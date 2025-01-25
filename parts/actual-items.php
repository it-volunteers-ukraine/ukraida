<div class="actual-items-and-pagination">
    <?php
        //
        $paged = max(get_query_var('paged'), 1);

        // Basic args for query
        $args = array(
            'paged'             => $paged,
            'posts_per_page'    => 6,
            'order'             => 'DESC',
            'lang'              => pll_current_language(),
        );

        // Categories meta query
        $val = $_GET['categories'] ?? [];
        $categories = is_array($val) ? $val : [$val];
        //
        if (count($categories)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category', 
                    'field' => 'name', 
                    'terms' => $categories
                )
            );
        }

        // Post type filter
        $post_type = $_GET['type'] ?? 'all';
        if ($post_type === 'news') {
            $args['post_type'] = 'post-types-one-news';
        } else if ($post_type === 'events') {
            $args['post_type'] = 'event';
        } else if ($post_type === 'all') {
            $args['post_type'] = ['event', 'post-types-one-news'];
        }

        // Search query filter
        $query = $_GET['query'] ?? '';
        if ($query) {
            // filter
            function actual_where( $where ) {
                $where = str_replace("meta_key = 'event_article_$", "meta_key LIKE 'event_article_%", $where);
                $where = str_replace("meta_key = 'one_news_article_$", "meta_key LIKE 'one_news_article_%", $where);
                return $where;
            }
            add_filter('posts_where', 'actual_where');

            //
            $args['meta_query'] = array(
                // Event
                'relation' => 'OR',
                array(
                    'key' => 'title',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'location_title',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'event_article_$_text',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                // News
                array(
                    'key' => 'one_news_title',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'one_news_author',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'one_news_text',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'one_news_article_$_text',
                    'value' => $query,
                    'compare' => 'LIKE',
                ),
            );
        }

        $query = new WP_Query($args);

        // Texts
        $currend_id = get_the_ID();
        $type_news_text = acf_esc_html(get_field('type_news_text', $currend_id));
        $type_news_link_text = acf_esc_html(get_field('type_news_link_text', $currend_id));
        $type_event_text = acf_esc_html(get_field('type_event_text', $currend_id));
        $type_event_link_text = acf_esc_html(get_field('type_event_link_text', $currend_id));

        // Outputting items
        echo '<div class="actual-items">';
        while ($query->have_posts()) {
            //
            $query->the_post();
            //
            $post_type = get_post_type();
            //
            if ($post_type === "event") {
                get_template_part(
                    'parts/actual-item-event',
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
                        'parts/actual-item-news',
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
            'parts/actual-pagination', null, ["current_page" => $paged, "max_num_pages" => $query->max_num_pages]
        );

        // Resetting postdata
        wp_reset_postdata();
    ?>
</div>