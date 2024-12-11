<?php
    $type = $_GET["type"] ?? "all";

    // Url's and classes
    $allUrl = add_query_arg("type", "all");
    $allClass = "news-filter-btn " . ($type == "all" ? "active" : "inactive" );
    $newsUrl = add_query_arg("type", "news");
    $newsClass = "news-filter-btn " . ($type == "news" ? "active" : "inactive" );
    $eventsUrl = add_query_arg("type", "events");
    $eventsClass = "news-filter-btn " . ($type == "events" ? "active" : "inactive" );

    // Texts
    $current_id = get_the_ID();
    $filter_text = acf_esc_html(get_field('filter_text', $current_id));
    $filter_all_text = acf_esc_html(get_field('filter_all_text', $current_id));
    $filter_news_text = acf_esc_html(get_field('filter_news_text', $current_id));
    $filter_events_text = acf_esc_html(get_field('filter_events_text', $current_id));
?>

<div class="news-filter">
    <span class="news-filter-text"><?= $filter_text ?></span>
    <span class="news-filter-buttons">
        <a class="<?= $allClass ?>" href="<?= $allUrl ?>"><?= $filter_all_text ?></a>
        <a class="<?= $newsClass ?>" href="<?= $newsUrl ?>"><?= $filter_news_text ?></a>
        <a class="<?= $eventsClass ?>" href="<?= $eventsUrl ?>"><?= $filter_events_text ?></a>
    </span>
</div>