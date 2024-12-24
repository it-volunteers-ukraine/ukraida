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
                if (have_rows('files', $current_id)) : 
                    ?>
                        <ul class="reports-links">
                            <?php 
                                while (have_rows('files', $current_id)) : 
                                    the_row();

                                    $title = acf_esc_html(get_sub_field('title'));
                                    $link = esc_url(get_sub_field('file')['url']);
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