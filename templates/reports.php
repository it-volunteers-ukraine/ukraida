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

            <?php if (have_rows('links')) : ?>
                <ul class="reports-links">
                    <?php while (have_rows('links')) : 
                        the_row();
                        $link = get_sub_field('link');
                    ?>
                        <li class="reports-link">
                            <a href="<?= $link["url"] ?>" target="_blank"><?= $link["title"] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>