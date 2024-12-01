<?php get_header();
/*
Template Name: PT Event Template
*/
?>

<?php
$current_id = get_the_ID();
$title = get_field('title', $current_id);
$date = get_field('date', $current_id);
$time = get_field('time', $current_id);
$location_title = get_field('location_title', $current_id);
$location_link = get_field('location_link', $current_id);
// echo $location_link;
if (!$location_link) {
    $location_link = pll_home_url() . '#event-map';
}
$image1 = get_field('image1', $current_id);
$image2 = get_field('image2', $current_id);
?>

<main class="">
    <section class="section section__event ">
        <div class="container container__event">
            <h1 class="event-title"><?php echo esc_html($title); ?></h1>
            <div class="calendar-list event__calendar">
                <div class="calendar-item">
                    <svg class="calendar-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar-blue"></use>
                    </svg>
                    <p class="calendar-text">
                        <?php echo esc_html($date); ?>
                    </p>
                </div>
                <div class="calendar-item">
                    <svg class="calendar-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-clock-blue"></use>
                    </svg>
                    <p class="calendar-text">
                        <?php echo esc_html($time); ?>
                    </p>
                </div>
                <div class="calendar-item">
                    <svg class="calendar-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-location-blue"></use>
                    </svg>
                    <p class="calendar-text location">
                        <a href="<?php echo esc_url($location_link); ?>"><?php echo esc_html($location_title); ?></a>
                    </p>
                </div>
            </div>

            <div class="event-images">
                <?php if ($image1) : ?>
                    <img class="event-image" src="<?php echo esc_url($image1['sizes']['large']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>">
                <?php endif; ?>
                <?php if ($image1) : ?>
                    <img class="event-image" src="<?php echo esc_url($image2['sizes']['large']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                <?php endif; ?>
            </div>

            <div class="event__category category">
                <div class="btn">Політичні події</div>
                <div class="btn">Музика</div>
                <div class="btn">Їжа</div>
            </div>

            <?php if (have_rows('event_article')) : ?>
                <?php while (have_rows('event_article')) : the_row(); ?>
                    <?php
                    $r_image1 = get_sub_field('image1');
                    $r_image1_title = get_sub_field('image1_title');
                    $r_image2 = get_sub_field('image2');
                    $r_image2_title = get_sub_field('image2_title');
                    $r_text = get_sub_field('text');
                    ?>
                    <div class="event__article article">
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
            <h2 class="socseti-title">Поділитись новиною:</h2>
            <div class="socseti-list">
                <a class="socseti-item" href="">
                    <svg class="socseti-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                    </svg>
                </a>
                <a class="socseti-item" href="">
                    <svg class="socseti-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
                    </svg>
                </a>
                <a class="socseti-item" href="">
                    <svg class="socseti-icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
                    </svg>
                </a>
            </div>

    </section>
</main>

<?php get_footer(); ?>