<?php
/**
 * The page for post type Project
 */
    get_header();
?>
    <main>
        <section class="section project">
            <div class="container container__project">
                <h1 class="project-title"><?= esc_html(get_field('project_title')) ?></h1>
                <div class="project-items">
                    <?php
                        $i = 1;
                        while (have_rows('project_items')):
                            the_row();

                            $item_class = ($i % 2) ? 'project-items-item-odd' : 'project-items-item-even';

                            // Image block
                            $image = get_sub_field('project_items_image');
                            $image_block = '';
                            if ($image) {
                                $image_tag = ImageHelper::get_image_tag($image, 'project-items-item-image');
                                $image_block = <<<BLOCK
                                    <div class="project-items-item-image-wrap">$image_tag</div>
                                BLOCK;
                            }
                            // Text
                            $text = acf_esc_html(get_sub_field('project_items_text'));
                    ?>
                            <div class="project-items-item <?= $item_class ?>">
                                <?= $image_block ?>
                                <div class="project-items-item-text">
                                    <?= $text ?>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    ?>
                </div>
            </div>
        </section>
    </main>
<?php
    get_footer();
