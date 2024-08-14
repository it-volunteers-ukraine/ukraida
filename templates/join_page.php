<?php get_header();
/*
Template Name: join
*/
?>
<?php
$current_id = get_the_ID();
$rows = get_field('news_list', $current_id);
$file1 = get_field('join_file1', $current_id);
$file2 = get_field('join_file2', $current_id);
?>

<main>
    <section class="section section__join">
        <div class="container container__join">
            <?php if (get_field('join1', $current_id)) : ?>
                <div class="container container__join" style="margin-bottom:40px;">
                    <?php echo get_field('join1', $current_id); ?>
                    <a href="<?php echo $file1['url']; ?>">
                        <img src="<?php echo $file1['icon']; ?>" alt="<?php echo $file1['name']; ?>">
                    </a>
                </div>

            <?php endif; ?>
            <?php if (get_field('join2', $current_id)) : ?>
                <div class="container container__join">
                    <?php echo get_field('join2', $current_id); ?>
                    <a href="<?php echo $file2['url']; ?>">
                        <img src="<?php echo $file2['icon']; ?>" alt="<?php echo $file2['name']; ?>">
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>