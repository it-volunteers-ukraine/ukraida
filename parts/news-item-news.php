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
?>
    <div class="news-item-news">
        <div class="news-item-news-image-wrap">
            <?= $img_tag ?>
            <div class="news-item-news-image-mask"></div>
        </div>
        <div class="news-item-news-badge"><?= $badge_text ?></div>
        <div class="news-item-news-categories">
            <?php
                foreach ($categories as $category):
                    ?>
                        <div class="news-item-news-category"><?= $category?></div>
                    <?php
                endforeach;
            ?>
        </div>
    </div>