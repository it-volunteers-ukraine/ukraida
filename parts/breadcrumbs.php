<?php
    // Helper function to get the breadcrumb item
    function get_breadcrumb_item($url, $title) {
        $s = <<<ITEM
        <li><a href="$url">$title</a></li>
        ITEM;
        return $s;
    }

    // Active item
    $active = '<li class="active">' . get_the_title() . '</li>';
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

    // Finally main page item
    $bcs[] = get_breadcrumb_item("/", "Головна");

    // Reversing items, joining them into one string
    $bcs_s = join("", array_reverse($bcs));

    echo <<<BREADCRUMBS
    <nav class="breadcrumbs"><ul>$bcs_s</ul></nav>
    BREADCRUMBS;