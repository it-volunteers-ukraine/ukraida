<?php
    $url = get_permalink();
    $is_active = $_GET["is_active"] ?? "all";

    // Url's and classes
    $allUrl = add_query_arg("is_active", "all", $url);
    $allClass = "projects-filter-btn " . ($is_active == "all" ? "active" : "inactive" );
    $activeUrl = add_query_arg("is_active", "active", $url);
    $activeClass = "projects-filter-btn " . ($is_active == "active" ? "active" : "inactive" );
    $inactiveUrl = add_query_arg("is_active", "inactive", $url);
    $inactiveClass = "projects-filter-btn " . ($is_active == "inactive" ? "active" : "inactive" );

    // Texts
    $currend_id = get_the_ID();
    $filter_text = acf_esc_html(get_field('projects_filter_text', $currend_id));
    $filter_all_text = acf_esc_html(get_field('projects_filter_all_text', $currend_id));
    $filter_active_text = acf_esc_html(get_field('projects_filter_active_text', $currend_id));
    $filter_inactive_text = acf_esc_html(get_field('projects_filter_inactive_text', $currend_id));
?>

<div class="projects-filter">
    <span class="projects-filter-text"><?= $filter_text ?></span>
    <span class="projects-filter-buttons">
        <a class="<?= $allClass ?>" href="<?= $allUrl ?>"><?= $filter_all_text ?></a>
        <a class="<?= $activeClass ?>" href="<?= $activeUrl ?>"><?= $filter_active_text ?></a>
        <a class="<?= $inactiveClass ?>" href="<?= $inactiveUrl ?>"><?= $filter_inactive_text ?></a>
    </span>
</div>