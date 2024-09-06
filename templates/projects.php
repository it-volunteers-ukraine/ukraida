<?php get_header();
/*
Template Name: projects
*/
    $currend_id = get_the_ID();
?>

<main>
    <section class="section projects">
        <div class="container container__projects">
            <h1 class="projects-title"><?php echo get_field('projects_title', $currend_id); ?></h1>
            <?php get_template_part('parts/projects-page-filter') ?>
            <?php get_template_part('parts/projects-page-items') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>