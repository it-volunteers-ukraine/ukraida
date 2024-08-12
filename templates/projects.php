<?php get_header();
/*
Template Name: projects
*/
?>
<?php
    $currend_id = get_the_ID();
?>

<main>
    <section class="section projects">
        <div class="container">
            <h1 class="projects-title"><?php echo get_field('title', $currend_id); ?></h1>
            <?php get_template_part('parts/projects-page-filter') ?>
            <?php get_template_part('parts/projects-page-items') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>