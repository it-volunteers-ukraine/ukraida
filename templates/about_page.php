<?php get_header();
/*
Template Name: event page
*/
?>

<?php
$current_id = get_the_ID();
?>

<main class="event ">
    <section class="section">
        <div class="container">
            <h1 class="event__title event__title-main"><?php echo esc_html(get_field('title_event', $current_id)); ?></h1>
            <?php 
            $args = array(
                'post_type' => 'post-types-about-med',
                'posts_per_page' => -1, // Выводим все посты
            );

            $query = new WP_Query($args);
            if (have_rows('about_us', $currend_id)): ?>
                <?php while (have_rows('about_us', $currend_id)): the_row(); ?>
                    <div class="about__content content-about-us">
                        <?php $about_us_title = get_sub_field('about_us_title'); ?>
                        <?php if ($about_us_title): ?>
                            <h2 class="about__title about__title-who-are-we"><?php echo esc_html($about_us_title); ?></h2>
                        <?php endif; ?>
                        <?php $image = get_sub_field('about_us_img'); ?>
                        <?php if ($image): ?>
                            <div class="about__img">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <div>
                            <?php if ($about_us_title): ?>
                                <h2 class="about__title about__title-who-are-we-block"><?php echo esc_html($about_us_title); ?></h2>
                            <?php endif; ?>
                            <div class="about__text">
                                <?php echo wp_kses_post(get_sub_field('about_us_text')); ?>
                            </div>
                            <a href="<?php echo esc_url(get_sub_field('button_link_page')); ?>" class="about__button" rel="noopener noreferrer">
                                <?php echo $detailed_information_button_text; ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

<!-----Початок секції "About in press"------------>  
    <?php 
    $args = array(
        'post_type' => 'post-types-about-med',
        'posts_per_page' => -1, // Retrieve all posts
    );

    $query = new WP_Query($args);
        
    // Check if there are any posts to display
    if ($query->have_posts()): ?>
    <section class="section">
        <div class="container">
            <h2 class="about__title about__title-slider"><?php echo esc_html(get_field('section_articles_title', $currend_id)); ?></h2>
            <div class="about__slider">
                <div class="about__slider-wrapper">  
                    <div class="swiper">
                        <div class="swiper-wrapper about__slider-container">
                            <?php 
                        while ($query->have_posts()): $query->the_post(); ?>
                            <div class="swiper-slide slider__item-container">
                                <div class="slider__item--left">
                                    <div class="slider__item-photo">
                                        <?php 
                                        $image = get_field('about_media_img');
                                        if ($image): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="slider__item-subtitle"><?php echo esc_html(get_field('about_media_title')); ?></div>
                                </div>
                                <div class="slider__item--right">
                                    <h3 class="slider__item-title"><?php the_field('about_media_name_article'); ?></h3>
                                    <p class="slider__date"><?php the_field('about_media_date'); ?></p>
                                    <p class="slider__item-text"><?php the_field('about_media_text'); ?></p>
                                    <?php
                                    $link = get_field('link_article');
                                    if ($link): ?>
                                    <div class="slider__item-link">
                                        <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
                                            <?php echo esc_html(get_field('link_title')); ?> 
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <button class="swiper-button-prev about__slider-button--left">
                        <svg class="about__arrow">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-left"></use>
                        </svg>
                    </button>
                    <button class="swiper-button-next about__slider-button--right">
                        <svg class="about__arrow">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                    </button>
                </div>    
                <div class="swiper-pagination about__slider-pagination"></div>
            </div>
            <div class="about__button-wrapper">
                <a href="<?php echo esc_url(get_field('link_button_press', $currend_id)); ?>" class="about__button about__slider-button" rel="noopener noreferrer">
                    <?php echo esc_html(get_field('about_press_button_text', $currend_id)); ?>
                </a>
            </div>
        </div>
    </section>
    <?php endif; 
    
    // Reset post data after custom query
    wp_reset_postdata(); ?>
<!-----Закінчення секції "About in press"------------>


<!-----Початок секції "Our partners and sponsors"------------>
<?php
    $args = array(
        'post_type' => 'post-types-our-partn', // Custom post type slug
        'posts_per_page' => -1, // Retrieve all partner posts
    );
    $partners_query = new WP_Query($args);

    // Check if there are any posts to display
    if ($partners_query->have_posts()): ?>
    <section class="section">
        <div class="container">
            <h2 class="about__title about__title-partners"><?php echo esc_html(get_field('title_our_partners', $currend_id)); ?></h2>
            <ul class="about__partners-list">
                <?php
                while ($partners_query->have_posts()): $partners_query->the_post();
                    // Get ACF fields for 'name' and 'logo'
                    $partner_name = get_field('our_partners_and_sponsors_name'); 
                    $partner_logo = get_field('our_partners_and_sponsors_logo'); 
                ?>
                    <li class="partners-item">
                        <div class="partners-list-img">
                            <?php if ($partner_logo): ?>
                            <img src="<?php echo esc_url($partner_logo['url']); ?>" alt="<?php echo esc_attr($partner_logo['alt']); ?>" />
                            <?php endif; ?>
                            <p><?php echo esc_html($partner_name); ?></p> 
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>

            <div class="about__partners-button">
                <a href="<?php echo esc_url(get_field('link_page_partners', $currend_id)); ?>" class="about__button" rel="noopener noreferrer">
                    <?php echo esc_html($detailed_information_button_text); ?>
                </a>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata(); // Reset post data after the loop
    endif; 
    ?>
<!-----Завершення секції "Our partners and sponsors"------------>
</main>


<?php get_footer(); ?>

