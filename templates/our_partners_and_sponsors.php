<?php get_header();
/*
Template Name: our partners and sponsors
*/
    $title = esc_html(get_field('our_partners_and_sponsors_title'))
?>

<main>
    <section class="section">
        <?php get_template_part('/parts/breadcrumbs'); ?>
        <div class="container container__our-partners-and-sponsors">
            <h1 class="our-partners-and-sponsors-title"><?= $title ?></h1>
            <?php get_template_part('parts/our-partners-and-sponsors-items') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>