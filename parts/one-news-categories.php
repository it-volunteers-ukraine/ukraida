<div class="one-news__categories">
    <?php 
    $categories = get_field('one_news_categories'); 
    if (!empty($categories) && is_array($categories)) : 
        $last_index = count($categories) - 1; // Индекс последней категории
        foreach ($categories as $index => $category) :
            if ($category instanceof WP_Term) : 
    ?>
    <div class="one-news__category">
        <span class="one-news__heshteg">#</span>
        <span class="category-item">
            <?= esc_html($category->name) ?><?= $index < $last_index ? ',' : '' ?>
        </span>
    </div>
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
