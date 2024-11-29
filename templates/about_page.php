<?php get_header();
/*
Template Name: about us
*/
?>

<?php
$currend_id = get_the_ID();

// Get the current translation for the devpage
$dev_page_url = PllHelper::get_current_translation('/about/about-media');

//
$detailed_information_button_text = esc_html(get_field('detailed_information_button_text', $currend_id));
$detailed_text = esc_html(get_field('about_detailed_text', $currend_id));
?>

<main class="about about__wrapper">
    <section class="section">
        <div class="container">
            <h1 class="about__title about__title-main"><?php echo esc_html(get_field('title_about', $currend_id)); ?></h1>
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

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <symbol id="left-arrow">
        <path d="M21.9444 9.77525L21.9444 21.0019C21.9451 21.4451 21.8202 21.8795 21.5842 22.2547C21.3483 22.6298 21.0109 22.9305 20.6111 23.1219C20.1368 23.346 19.6091 23.4322 19.0881 23.371C18.5671 23.3097 18.0738 23.1033 17.6644 22.7752L10.8644 17.1619C10.6103 16.9416 10.4064 16.6693 10.2667 16.3633C10.127 16.0573 10.0547 15.7249 10.0547 15.3886C10.0547 15.0522 10.127 14.7198 10.2667 14.4138C10.4064 14.1079 10.6103 13.8355 10.8644 13.6152L17.6644 8.00191C18.0738 7.6739 18.5671 7.46749 19.0881 7.4062C19.6091 7.34491 20.1368 7.4312 20.6111 7.65525C21.0109 7.84664 21.3483 8.14732 21.5842 8.52251C21.8202 8.89769 21.9451 9.33203 21.9444 9.77525Z" />
    </symbol>
    <symbol id="right-arrow">
        <path d="M10.0546 21.0019L10.0546 9.77519C10.054 9.33197 10.1788 8.89763 10.4148 8.52245C10.6508 8.14726 10.9882 7.84658 11.3879 7.65519C11.8622 7.43114 12.39 7.34485 12.9109 7.40614C13.4319 7.46743 13.9252 7.67385 14.3346 8.00185L21.1346 13.6152C21.3888 13.8355 21.5926 14.1078 21.7323 14.4138C21.872 14.7198 21.9443 15.0522 21.9443 15.3885C21.9443 15.7249 21.872 16.0573 21.7323 16.3632C21.5926 16.6692 21.3888 16.9416 21.1346 17.1619L14.3346 22.7752C13.9252 23.1032 13.4319 23.3096 12.9109 23.3709C12.39 23.4322 11.8622 23.3459 11.3879 23.1219C10.9882 22.9305 10.6508 22.6298 10.4148 22.2546C10.1788 21.8794 10.054 21.4451 10.0546 21.0019Z" />
    </symbol>
</svg>
<?php get_footer(); ?>
