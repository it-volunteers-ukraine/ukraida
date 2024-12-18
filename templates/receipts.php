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

            <?php if (have_rows('links')) : ?>
                <ul class="receipts-links">
                    <?php while (have_rows('links')) : 
                        the_row();
                        $link = get_sub_field('link');
                    ?>
                        <li class="receipts-link">
                            <a href="<?= $link["url"] ?>" target="_blank"><?= $link["title"] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>