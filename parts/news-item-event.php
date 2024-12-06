<?php
    $currend_id = get_the_ID();

    // Preparing variables
    // Image
    $image = get_field('image1', $currend_id);
    $img_tag = ImageHelper::get_image_tag($image, 'news-item-event-image');
    // Badge text
    $badge_text = $args['texts']['type'];
    // Categories
    $categories_terms = get_field('categoty', $currend_id);
    $categories = [];
    if ($categories_terms) {
        $categories = array_map(function ($term) {
            return $term->name;
        }, $categories_terms);
    }
?>
    <div>event</div>