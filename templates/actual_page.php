<?php get_header();
/*
Template Name: actualpage
*/
?>


<main>
    <?php
    $current_id = get_the_ID();
    $actual_title = get_field('title', $current_id);

    ?>
    <section class="section actual">
        <div class="container actual">
            <h1 class="actual-title"><?php echo $actual_title; ?></h1>
            <?php get_template_part('/parts/actual-search'); ?>
            <?php get_template_part('/parts/actual-filter'); ?>
            <?php get_template_part('/parts/actual-items'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>