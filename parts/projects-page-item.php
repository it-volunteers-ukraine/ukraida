<?php
    $index = $args["index"];

    //
    $is_active = get_field("project_is_active");
    $is_active_class = $is_active ? "active" : "inactive";
    $is_active_text = $is_active ? $args["texts"]["active"] : $args["texts"]["inactive"];

    //
    $link = get_the_permalink();
?>
<div class="projects-item">
    <div class="projects-item-images">
        <?php get_template_part('parts/projects-page-swipers', null, ["idNumber" => $index]); ?>
    </div>
    <div class="projects-item-info">
        <div class="projects-item-info-is-active-row">
            <span class="projects-item-info-is-active-badge <?= $is_active_class ?>">
                <?= $is_active_text ?>
            </span>
        </div>
        <div class="projects-item-info-header-row">
            <h2 class="projects-item-info-header">
                <?= get_field("project_title") ?>
            </h2>
        </div>
        <div class="projects-item-info-excerpt-row">
            <p class="projects-item-info-excerpt">
                <?= get_field("project_excerpt") ?>
            </p>
        </div>
        <div class="projects-item-detailed projects-item-detailed-wide">
            <a class="projects-item-detailed-btn" href="<?= $link ?>">
                <?= $args["texts"]["detailed_information"] ?>
            </a>
        </div>
    </div>
    <div class="projects-item-detailed projects-item-detailed-narrow">
        <a class="projects-item-detailed-btn" href="<?= $link ?>">
            <?= $args["texts"]["detailed_information"] ?>
        </a>
    </div>
</div>