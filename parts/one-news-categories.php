<div class="one-news__categories">
    <?php 
    $categories = get_field('one_news_categories'); 
    if (!empty($categories) && is_array($categories)) : 
        foreach ($categories as $category) :
            if ($category instanceof WP_Term) : 
    ?>
    <span class="category-item">
        <a href="<?= esc_url(get_category_link($category->term_id)) ?>">
            <?= esc_html($category->name) ?>
        </a>
    </span>
    <?php 
        endif; 
            endforeach; 
        else : 
    ?>
        <p class="one-news__no-categories">Категорії відсутні</p>
    <?php 
    endif; 
    ?>
</div>
