<?php get_header();
/*
Template Name: Data protection
*/
?>

<div class="wrapper">
    <main>
        <section class="container policy">
            <div class="policy">
                <?php the_field('data_protection', 'option') ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>