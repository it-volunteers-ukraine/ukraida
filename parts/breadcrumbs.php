<?php
    // Helper function to get the breadcrumb item
    function get_breadcrumb_item($url, $title) {
        $s = <<<ITEM
        <li class="breadcrumbs-item"><a href="$url">$title</a></li>
        ITEM;
        return $s;
    }

    // Active item
    $active = '<li class="breadcrumbs-item active">' . get_the_title() . '</li>';
    $bcs = [$active];

    // Retrieving all parent items one by one and adding them to breadcrumbs array
    $parent_id = wp_get_post_parent_id(get_the_ID());
    while ($parent_id) {
        // Title and url of the parent
        $title = get_the_title($parent_id);
        $url = get_the_permalink($parent_id);
        // Preparing breadcrumb item and adding it to the array
        $bcs[] = get_breadcrumb_item($url, $title);
        // Retrieving next parent
        $parent_id = wp_get_post_parent_id($parent_id);
    }

    // Home page
    $home_url = function_exists('pll_home_url') ? pll_home_url() : '/';
    $home_id = url_to_postid($home_url);
    $home_title = get_the_title($home_id);
    $bcs[] = get_breadcrumb_item($home_url, $home_title);

    // Reversing items, joining them into one string
    $bcs_s = join("", array_reverse($bcs));

    echo <<<BREADCRUMBS
        <div class="container container__breadcrumbs">
            <nav class="breadcrumbs"><ul>$bcs_s</ul></nav>
        </div>
    BREADCRUMBS;