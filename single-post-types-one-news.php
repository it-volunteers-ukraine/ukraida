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