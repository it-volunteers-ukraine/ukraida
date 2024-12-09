<?php
    $currend_id = get_the_ID();

    // Preparing variables
    // Image
    $image = get_field('one_news_img', $currend_id);
    $img_tag = ImageHelper::get_image_tag($image, 'news-item-news-image');
    // Badge text
    $badge_text = $args['texts']['type'];
    // Categories
    $categories_terms = get_field('one_news_categories', $currend_id);
    $categories = [];
    if ($categories_terms) {
        $categories = array_map(function ($term) {
            return $term->name;
        }, $categories_terms);
    }
    //
    $title = esc_html(get_field('one_news_title', $currend_id));
    $date = esc_html(get_field('one_news_date', $currend_id));
    $text = esc_html(get_field('one_news_text', $currend_id));
    $link = get_the_permalink($currend_id);
    $link_text = $args['texts']['link_title'];
?>
    <div class="news-item-news">
        <div class="news-item-news-image-wrap">
            <?= $img_tag ?>
            <div class="news-item-news-image-mask"></div>
        </div>
        <div class="news-item-news-badge"><?= $badge_text ?></div>
        <?php
            // Display categories if there are some
            if (count($categories)):
                ?>
                    <div class="news-item-news-categories">
                        <?php
                            foreach ($categories as $category):
                                ?>
                                    <div class="news-item-news-category"><?= $category?></div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                <?php
            endif;
        ?>
        <div class="news-item-news-card">
            <div class="news-item-news-info">
                <div class="news-item-news-header">
                    <h2 class="news-item-news-title">
                        <?= $title ?>
                    </h2>
                    <div class="news-item-news-date">
                        <?= $date ?>
                    </div>
                </div>
                <div class="news-item-news-excerpt">
                    <?= $text ?>
                </div>
            </div>
            <div class="news-item-news-link">
                <a href="<?= $link ?>"><?= $link_text ?></a>
            </div>
        </div>
    </div>