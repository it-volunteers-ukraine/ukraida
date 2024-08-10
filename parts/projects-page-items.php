<div class="projects-items">
    <?php
        $args = array(
            'post_type'         => 'post-types-project',
            'posts_per_page'    => 2,
            'order'             => 'DESC',
        );
        $query = new WP_Query($args);

        $i = 1;
        while ($query->have_posts()) {
            $query->the_post();

            //
            $is_active = get_field("project_is_active");
            $is_active_class = $is_active ? "active" : "inactive";
            $is_active_text = $is_active ? __("Активний") : __("Не активний");
    ?>
            <div class="projects-item">
                <div class="projects-item-images">
                    <?php get_template_part('parts/projects-page-swipers', null, ["idNumber" => $i]); ?>
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
                    <div class="projects-item-info-detailed-row">
                        <a class="projects-item-info-detailed-btn" href="<?= get_the_permalink() ?>">
                            <?= __("Детальна інформація") ?>
                        </a>
                    </div>
                </div>
            </div>
    <?php
            // hr after every odd post
            if ($i % 2) {
    ?>
                <hr class="projects-items-hr">
    <?php
            }

            $i++;
        }
        wp_reset_postdata();
    ?>
</div>