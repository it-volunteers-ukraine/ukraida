<?php
/**
 * The page for post type one news
 */
    get_header();
?>

<main>
    <section class="section section__one-news">
        <div class="container">
            <h1 class="one-news__title">
                <?php echo esc_html(get_field('one_news_title')); ?>
            </h1>

            <div class="one-news__wrapper">
                <?php get_template_part('parts/one-news-in-media'); ?>
                <div class="one-news__block-img">
                    <?php get_template_part('parts/one-news-categories'); ?>
                    <div class="one-news__img">
                    <?php 
                    $image = get_field('one_news_img');
                    if ($image) : 
                        $image_url = esc_url($image['url']);
                        $image_alt = esc_attr($image['alt']);
                    ?>
                        <img src="<?= $image_url ?>" alt="<?= $image_alt ?>" class="one-news__img-img" />
                        <?php else : ?>
                        <p class="one-news__no-img">Зображення відсутнє</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="one-news__text">
                <?php 
                    $text = get_field('one_news_text');
                    if ($text) :
                        echo wp_kses_post($text); 
                    else : ?>
                        <p class="one-news__no-text">Текст відсутній</p>
                <?php endif; ?>
            </div>

            <?php if (have_rows('one_news_article')) : ?>
                <?php while (have_rows('one_news_article')) : the_row(); ?>
                    <?php
                    $r_image1 = get_sub_field('image1');
                    $r_image1_title = get_sub_field('image1_title');
                    $r_image2 = get_sub_field('image2');
                    $r_image2_title = get_sub_field('image2_title');
                    $r_text = get_sub_field('text');
                    ?>
                    <div class="one-news__article article">
                        <?php if ($r_image1 || $r_image2): ?>
                            <div class="article-images">
                                <?php if ($r_image1) : ?>
                                    <div class="article-image-item">
                                        <div class="article-image-wrapper">
                                            <img class="article-image" src="<?php echo esc_url($r_image1['sizes']['large']); ?>" alt="<?php echo esc_attr($r_image1['alt']); ?>">
                                        </div>
                                        <?php if ($r_image1_title) : ?>
                                            <p class="article-image-title">
                                                <?php echo esc_html($r_image1_title); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($r_image2) : ?>
                                    <div class="article-image-item">
                                        <div class="article-image-wrapper">
                                            <img class="article-image" src="<?php echo esc_url($r_image2['sizes']['large']); ?>" alt="<?php echo esc_attr($r_image2['alt']); ?>">
                                        </div>
                                        <?php if ($r_image2_title) : ?>
                                            <p class="article-image-title">
                                                <?php echo esc_html($r_image2_title); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-text">
                            <?php if ($r_text) : ?>
                                <?php echo ($r_text); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="section section__socseti">
        <div class="container">
            <?php get_template_part('parts/block_share_socseti', null, []); ?>
        </div>
    </section>
</main>

<?php
    get_footer();