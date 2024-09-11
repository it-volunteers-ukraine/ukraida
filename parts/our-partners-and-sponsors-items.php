<?php
    // Basic args for query
    // First sort by rank then sort by date
    $args = array(
        'post_type'         => 'post-types-our-partn',
        'meta_key'          => 'our_partners_and_sponsors_order_rank',
        'orderby'           => ['meta_value_num' => 'ASC', 'date' => 'DESC'],
    );
    $query = new WP_Query($args);

    // Text
    $currend_id = get_the_ID();
    $go_to_site_text = acf_esc_html(get_field('our_partners_and_sponsors_go_to_site_text', $currend_id));

    // Outputting items
    echo '<div class="our-partners-and-sponsors-items">';
    while ($query->have_posts()) {
        $query->the_post();
        // Project's item
        get_template_part(
            'parts/our-partners-and-sponsors-item',
            null,
            [
                "go_to_site_text" => $go_to_site_text,
            ]
        );
    }
    echo '</div>';

    // Resetting postdata
    wp_reset_postdata();