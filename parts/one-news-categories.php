<div class="one-news__categories">
    <?php 
    $categories = get_field('one_news_categories'); 
    if (!empty($categories) && is_array($categories)) : 
        foreach ($categories as $category) :
            if ($category instanceof WP_Term) : 
    ?>
    <span class="category-item">
        <?= esc_html($category->name) ?> 
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
