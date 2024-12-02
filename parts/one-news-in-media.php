<div class="one-news__in-media">
    <div class="one-news__photo">
        <?php 
            $photo = get_field('one_news_photo');   
            if (!empty($photo['url'])) : 
        ?>
        <img class="one-news__photo-img" src="<?= esc_url($photo['url']) ?>" alt="<?= esc_attr($photo['alt'] ?? '') ?>" />
            <?php else : ?>
        <p>Фото відсутнє</p>
        <?php endif; ?>
    </div>

    <div class="one-news__author">
        <?php 
            $author = get_field('one_news_author'); 
            echo esc_html($author);
        ?>
    </div>

    <div class="one-news__date">
        <?php 
            $date = get_field('one_news_date'); 
            echo esc_html($date);
        ?>
    </div>
</div>


