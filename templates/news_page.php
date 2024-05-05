<?php get_header();
/*
Template Name: newspage
*/
?>


<main>
    <?php
    $currend_id = get_the_ID();
    $rows = get_field('news_list', $currend_id);

    ?>
    <section class="section news">
        <div class="container">
            <h1 class="news-title">Новини</h1>

            <?php if (have_rows('news_list')) : ?>
                <ul class="news-list">
                    <?php while (have_rows('news_list')) : the_row();
                        $image = get_sub_field('event_image');
                        $title = get_sub_field('event_title');
                        $text = get_sub_field('event_text');
                        // var_dump( $image);
                    ?>
                        <li class="news-item">
                            <img class="news_img" src="<?php echo $image['url']  ?>">
                            <h2 class="news_title"><?php echo $title; ?></h2>
                            <div class="news_text"><?php echo $text; ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>