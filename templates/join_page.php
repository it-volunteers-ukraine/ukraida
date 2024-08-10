<?php get_header();
/*
Template Name: join
*/
?>
<?php
$current_id = get_the_ID();
$rows = get_field('news_list', $current_id);

?>

<main>
    <section class="section section__join">
        <div class="container container__join">
            <?php if (get_field('join1', $current_id)) : ?>
                <div class="container container__join">
                    <?php echo get_field('join1', $current_id); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('join2', $current_id)) : ?>
                <div class="container container__join">
                    <?php echo get_field('join2', $current_id); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>