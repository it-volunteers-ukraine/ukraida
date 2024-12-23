<?php get_header();
/*
Template Name: reports
*/
?>

<main>
    <?php
        $current_id = get_the_ID();
        $reports_title = get_field('title', $current_id);
    ?>
    <section class="section reports">
        <div class="container reports">
            <h1 class="reports-title"><?php echo $reports_title; ?></h1>

            <?php
                // Basic args for query
                $args = array(
                    'post_type'         => 'post-types-reports',
                    'posts_per_page'    => -1,
                    'meta_key'          => 'sort_by',
                    'meta_type'         => 'DATETIME',
                    'orderby'           => ['meta_value' => 'DESC'],
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) : 
                    ?>
                        <ul class="reports-links">
                            <?php 
                                while ($query->have_posts()) : 
                                    $query->the_post();

                                    $title = acf_esc_html(get_field('name'));
                                    $link = esc_url(get_field('file')['url']);
                                ?>
                                    <li class="reports-link">
                                        <a href="<?= $link ?>" target="_blank"><?= $title ?></a>
                                    </li>
                                <?php 
                                endwhile; 
                            ?>
                        </ul>
                    <?php 
                endif; 
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>