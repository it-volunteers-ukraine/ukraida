<?php
    $current_id = get_the_ID();

    // Preparing variables
    // Image
    $image = get_field('image1', $current_id);
    $img_tag = ImageHelper::get_image_tag($image, 'news-item-event-image');
    // Badge text
    $badge_text = $args['texts']['type'];
    // Categories
    $categories_terms = get_field('categoty', $current_id);
    $categories = [];
    if ($categories_terms) {
        $categories = array_map(function ($term) {
            return $term->name;
        }, $categories_terms);
    }
    //
    $title = esc_html(get_field('title', $current_id));
    $date = get_the_date('d.m.Y', $current_id) . $args['texts']['date_ending'];
    $event_date = esc_html(get_field('date', $current_id));
    $time = esc_html(get_field('time', $current_id));
    $location_title = esc_html(get_field('location_title', $current_id));
    $location_link = esc_html(get_field('location_link', $current_id));
    //
    $event_article = get_field('event_article', $current_id);
    $text = $event_article[0]['text'];
    //
    $link = get_the_permalink($current_id);
    $link_text = $args['texts']['link_title'];
?>
    <div class="news-item-event">
        <div class="news-item-event-image-wrap">
            <?= $img_tag ?>
            <div class="news-item-event-image-mask"></div>
        </div>
        <div class="news-item-event-badge"><?= $badge_text ?></div>
        <?php
            // Display categories if there are some
            if (count($categories)):
                ?>
                    <div class="news-item-event-categories">
                        <?php
                            foreach ($categories as $category):
                                ?>
                                    <div class="news-item-event-category"><?= $category?></div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                <?php
            endif;
        ?>
        <div class="news-item-event-ldp">
            <div class="news-item-event-date-row">
                <div class="news-item-event-date">
                    <?= $event_date ?>
                </div>
            </div>
            <div class="news-item-event-time-row">
                <div class="news-item-event-time">
                    <?= $time ?>
                </div>
            </div>
            <div class="news-item-event-location-row">
                <div class="news-item-event-location">
                    <a href="<?= $location_link ?>"><?= $location_title ?></a>
                </div>
            </div>
        </div>
        <div class="news-item-event-card">
            <div class="news-item-event-info">
                <div class="news-item-event-header">
                    <h2 class="news-item-event-title">
                        <?= $title ?>
                    </h2>
                    <div class="news-item-event-date">
                        <?= $date ?>
                    </div>
                </div>
                <div class="news-item-event-excerpt">
                    <?= $text ?>
                </div>
            </div>
            <div class="news-item-event-link">
                <a href="<?= $link ?>"><?= $link_text ?></a>
            </div>
        </div>
    </div>