<?php
    $currend_id = get_the_ID();

    $search_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-arrow-right1";
    $search_placeholder = get_field('search_placeholder', $currend_id);
?>

<form class="news-search-form">
    <div class="news-search-container">
        <input class="news-search-input" name="query" placeholder="<?= $search_placeholder ?>">
        <svg class="news-search-svg"><use xlink:href="<?= $search_icon_href ?>"></use></svg>
        <button class="news-search-btn" type="submit">123</button>
    </div>
    <div class="news-search-categories">
        <select class="news-search-narrow-select" id="newsSearchNarrowSelect" multiple="multiple" name="categories[]">
            <option>1</option>
            <option>2</option>
        </select>
        <div class="news-search-wide-categories"></div>
    </div>
</form>