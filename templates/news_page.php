<?php get_header();
/*
Template Name: newspage
*/
?>


<main>
    <?php
    $currend_id = get_the_ID();
    $news_title = get_field('title', $currend_id);

    ?>
    <section class="section news">
        <div class="container news">
            <h1 class="news-title"><?php echo $news_title; ?></h1>
            <?php get_template_part('/parts/news-search'); ?>
            <?php get_template_part('/parts/news-filter'); ?>
            <?php get_template_part('/parts/news-items'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>