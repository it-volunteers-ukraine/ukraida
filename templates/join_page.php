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
            <h1 class="join-title"><?php echo get_field('join_title', $current_id); ?></h1>
            <div class="join-text"><?php echo get_field('join_text', $current_id); ?></div>
            <?php if (have_rows('join_files', $current_id)): ?>
                <div class="join-file-list">
                    <?php while (have_rows('join_files', $current_id)): the_row();
                        $file = get_sub_field('file'); ?>
                        <a href="<?php echo esc_url($file['url']); ?>" class="join-file" target="_blank">
                            <svg class="join-icon">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-report"></use>
                            </svg>
                            <?php $file_alt = $file['caption'] ? $file['caption'] : esc_attr($file['filename']); ?>
                            <p class="join-filename"><?php echo $file_alt; ?></p>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>