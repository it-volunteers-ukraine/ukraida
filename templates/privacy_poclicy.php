<?php get_header();
/*
Template Name: Privacy Policy
*/
?>

<div class="wrapper">
    <main>
        <section class="container policy">
            <div class="policy">
                <?php the_field('privacy_policy', 'option') ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>