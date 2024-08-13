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
?>

<div class="projects-filter">
    <span class="projects-filter-text"><?php _e("Фільтрувати:"); ?></span>
    <span class="projects-filter-buttons">
        <a class="<?= $allClass ?>" href="<?= $allUrl ?>">
            <?php _e("Усі"); ?>
        </a>
        <a class="<?= $activeClass ?>" href="<?= $activeUrl ?>">
            <?php _e("Активні"); ?>
        </a>
        <a class="<?= $inactiveClass ?>" href="<?= $inactiveUrl ?>">
            <?php _e("Неактивні"); ?>
        </a>
    </span>
</div>