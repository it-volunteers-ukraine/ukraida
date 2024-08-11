<div class="projects-filter">
    <span class="projects-filter-text"><?php _e("Фільтрувати:"); ?></span>
    <span class="projects-filter-buttons">
        <a class="projects-filter-btn active" id="filterAllButton" data-value="all" onClick="onFilterActiveClick(this);">
            <?php _e("Усі"); ?>
        </a>
        <a class="projects-filter-btn inactive" id="filterInactiveButton" data-value="active" onClick="onFilterActiveClick(this);">
            <?php _e("Активні"); ?>
        </a>
        <a class="projects-filter-btn inactive" id="filterActiveButton" data-value="inactive" onClick="onFilterActiveClick(this);">
            <?php _e("Неактивні"); ?>
        </a>
    </span>
</div>