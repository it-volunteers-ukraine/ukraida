<?php get_header();
/*
Template Name: about us
*/
?>

<?php
$currend_id = get_the_ID();
?>

<main class="about about__wrapper">
    <section class="container">
        <div class="about__title-wrapper">
            <h1 class="about__title"><?php echo get_field('title_about', $currend_id); ?></h1>
        </div>
        <div class="about__content content-about-us">
            <div class="about__img">
                <?php $image = get_field('img_about', $currend_id);
                    if( !empty($image) ): ?>
                        <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            <?php endif; ?>
            </div>
            <div class="about__text-wrapper">
                <div class="about__text">
                    <?php echo get_field('text_about', $currend_id); ?>
                </div>
                <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" rel="noopener noreferrer">
                    <?php echo get_field('text_button', $currend_id); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="about__content content-who-are-we">
            <h2 class="about__title about__title-who-are-we"><?php echo get_field('title_section_who_are_we', $currend_id); ?></h2>
            <div class="about__img">
                <?php $image = get_field('img_section_who_are_we', $currend_id);
                    if( !empty($image) ): ?>
                        <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            <?php endif; ?>
            </div>
            <div class="about__text-wrapper">
                <h2 class="about__title about__title-who-are-we-block"><?php echo get_field('title_section_who_are_we', $currend_id); ?></h2>
                <div class="about__text">
                    <?php echo get_field('text_about', $currend_id); ?>
                </div>
                <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" rel="noopener noreferrer">
                    <?php echo get_field('text_button', $currend_id); ?>
                </a>
            </div>
        </div>
    </section>
 
    <section class="slider__wrapper about__slider-wrapper container">
        <button class="slider__button swiper-button-prev">
            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.9444 9.77525L21.9444 21.0019C21.9451 21.4451 21.8202 21.8795 21.5842 22.2547C21.3483 22.6298 21.0109 22.9305 20.6111 23.1219C20.1368 23.346 19.6091 23.4322 19.0881 23.371C18.5671 23.3097 18.0738 23.1033 17.6644 22.7752L10.8644 17.1619C10.6103 16.9416 10.4064 16.6693 10.2667 16.3633C10.127 16.0573 10.0547 15.7249 10.0547 15.3886C10.0547 15.0522 10.127 14.7198 10.2667 14.4138C10.4064 14.1079 10.6103 13.8355 10.8644 13.6152L17.6644 8.00191C18.0738 7.6739 18.5671 7.46749 19.0881 7.4062C19.6091 7.34491 20.1368 7.4312 20.6111 7.65525C21.0109 7.84664 21.3483 8.14732 21.5842 8.52251C21.8202 8.89769 21.9451 9.33203 21.9444 9.77525Z" />
            </svg>
        </button>

        <div class="slide">
            <div class="about__title-wrapper-slider">
                <h2 class="about__title about__title-slider"><?php echo get_field('section_articles_title', $currend_id); ?></h2>
            </div>
            <div class="about__title-wrapper-slider--big">
                <h2 class="about__title about__title-slider--big"><?php echo get_field('section_articles_title_big', $currend_id); ?></h2>
            </div>

            <div class="about__slider-container">
                <div class="slider-main swiper-main swiper">
                    <div class="slider__track-big swiper-wrapper slider-wrapper">
                        <?php if( have_rows('about_in_media') ): ?>
                        <?php while( have_rows('about_in_media') ): the_row(); ?>
                            <div class="swiper-slide slider__item-wrapper">
                                <div class="slider__item-container">
                                    <div class="slider__item-content">
                                        <div class="slider__item-flex">
                                            <div class="slider__item-subtitle"><?php the_sub_field('about_in_media_subtitle'); ?></div>
                                            <div>
                                                <div class="slider__item-title"><?php the_sub_field('about_in_media_title'); ?></div>
                                                <div class="slider__item-text"><?php the_sub_field('about_in_media_text'); ?></div>
                                                <?php 
                                                $link = get_sub_field('about_in_media_link');
                                                if( $link ): ?>
                                                    <div class="slider__item-link"><a href="<?php echo esc_url($link); ?>">Детальніше</a></div> 
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-pagination about__slider-pagination"></div>
                    <div class="about__slider-button">
                        <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" rel="noopener noreferrer">
                            <?php echo get_field('text_button', $currend_id); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <button class="slider__button swiper-button-next">
            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.0546 21.0019L10.0546 9.77519C10.054 9.33197 10.1788 8.89763 10.4148 8.52245C10.6508 8.14726 10.9882 7.84658 11.3879 7.65519C11.8622 7.43114 12.39 7.34485 12.9109 7.40614C13.4319 7.46743 13.9252 7.67385 14.3346 8.00185L21.1346 13.6152C21.3888 13.8355 21.5926 14.1078 21.7323 14.4138C21.872 14.7198 21.9443 15.0522 21.9443 15.3885C21.9443 15.7249 21.872 16.0573 21.7323 16.3632C21.5926 16.6692 21.3888 16.9416 21.1346 17.1619L14.3346 22.7752C13.9252 23.1032 13.4319 23.3096 12.9109 23.3709C12.39 23.4322 11.8622 23.3459 11.3879 23.1219C10.9882 22.9305 10.6508 22.6298 10.4148 22.2546C10.1788 21.8794 10.054 21.4451 10.0546 21.0019Z" />
            </svg>
        </button> 
    </section>


    <section class="container">
        <div class="about__title-wrapper">
            <h2 class="about__title about__title-partners">
                <?php echo get_field('title_our_partners', $currend_id); ?>
            </h2>
        </div>
            <?php
            $field = get_field_object('our_partners_img', $currend_id); 
            $images = $field['value']; 
            if ($images): ?>
        <div class="about__grid-container-partners">
            <?php 
            $index = 0; 
            foreach ($images as $image): 
                $class = 'item'; 
                    if ($index == 0) {
                        $class .= ' image'; 
                    } elseif ($index < 3) {
                        $class .= ' new-width'; 
                    }
            ?>
            <div class="<?php echo $class; ?>">
                <figure>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <figcaption><?php echo esc_html($image['caption']); ?></figcaption>
                </figure>
            </div>
                <?php 
                $index++; 
                endforeach; 
                ?>
            </div>
                <?php endif; ?>
            <div class="about__slider-button-bottom">
                <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" rel="noopener noreferrer">
                    <?php echo get_field('text_button', $currend_id); ?>
                </a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>

