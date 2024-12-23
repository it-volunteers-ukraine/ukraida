<?php get_header();
/*
Template Name: receipts
*/
?>

<main>
    <?php
        $current_id = get_the_ID();
        $receipts_title = get_field('title', $current_id);
    ?>
    <section class="section receipts">
        <div class="container receipts">
            <h1 class="receipts-title"><?php echo $receipts_title; ?></h1>

            <?php
                // Basic args for query
                $args = array(
                    'post_type'         => 'post-types-receipts',
                    'posts_per_page'    => -1,
                    'meta_key'          => 'sort_by',
                    'meta_type'         => 'DATETIME',
                    'orderby'           => ['meta_value' => 'DESC'],
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) : 
                    ?>
                        <ul class="receipts-links">
                            <?php 
                                while ($query->have_posts()) : 
                                    $query->the_post();

                                    $title = acf_esc_html(get_field('name'));
                                    $link = esc_url(get_field('file')['url']);
                                ?>
                                    <li class="receipts-link">
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