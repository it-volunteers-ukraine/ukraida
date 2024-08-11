<div class="projects-items" id="projectsItems">
    <?php
        $args = array(
            'post_type'         => 'post-types-project',
            'posts_per_page'    => 2,
            'order'             => 'DESC',
        );
        $query = new WP_Query($args);

        $index = 1;
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('parts/projects-page-item', null, ["index" => $index]);
    ?>
    <?php
            // hr after every odd post
            if ($index % 2) {
    ?>
                <hr class="projects-items-hr">
    <?php
            }

            $index++;
        }
        wp_reset_postdata();
    ?>
</div>