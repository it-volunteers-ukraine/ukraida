<?php
    $current_id = get_the_ID();

    // Preparing variables
    // Image
    $image = get_field('one_news_img', $current_id);
    $img_tag = ImageHelper::get_image_tag(
        $image, 
        'actual-item-news-image',
        '(max-width: 767.9px) 100vw, (max-width: 1919.9px) 50vw, 33.33vw'
    );
    // Badge text
    $badge_text = $args['texts']['type'];
    // Categories
    $categories_terms = get_field('one_news_categories', $current_id);
    $categories = [];
    if ($categories_terms) {
        $categories = array_map(function ($term) {
            return $term->name;
        }, $categories_terms);
    }
    //
    $title = esc_html(get_field('one_news_title', $current_id));
    $date = esc_html(get_field('one_news_date', $current_id));
    $text = esc_html(get_field('one_news_text', $current_id));
    $link = get_the_permalink($current_id);
    $link_text = $args['texts']['link_title'];
?>
    <div class="actual-item-news">
        <div class="actual-item-news-image-wrap">
            <?= $img_tag ?>
        </div>
        <div class="actual-item-news-badge"><?= $badge_text ?></div>
        <?php
            // Display categories if there are some
            if (count($categories)):
                ?>
                    <ul class="actual-item-news-categories">
                        <?php
                            foreach ($categories as $category):
                                ?>
                                    <li class="actual-item-news-category"><?= $category?></li>
                                <?php
                            endforeach;
                        ?>
                    </ul>
                <?php
            endif;
        ?>
        <div class="actual-item-news-card">
            <div class="actual-item-news-info">
                <div class="actual-item-news-header">
                    <h2 class="actual-item-news-title">
                        <?= $title ?>
                    </h2>
                    <div class="actual-item-news-date">
                        <?= $date ?>
                    </div>
                </div>
                <div class="actual-item-news-excerpt">
                    <?= $text ?>
                </div>
            </div>
            <div class="actual-item-news-link">
                <a href="<?= $link ?>"><?= $link_text ?></a>
            </div>
        </div>
    </div>