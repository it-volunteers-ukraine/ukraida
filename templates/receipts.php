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
                if (have_rows('files', $current_id)) : 
                    ?>
                        <ul class="receipts-links">
                            <?php 
                                while (have_rows('files', $current_id)) : 
                                    the_row();

                                    $title = acf_esc_html(get_sub_field('title'));
                                    $link = esc_url(get_sub_field('file')['url']);
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