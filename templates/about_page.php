<?php get_header();
/*
Template Name: about us
*/
?>

<?php
$currend_id = get_the_ID();
?>

<main>
    
    <section class="about">
        <div class="about__wrapper">
            <div class="container"> 
                <div class="about__title-wrapper">
                    <h1 class="about__title"><?php echo get_field('title_about', $currend_id); ?></h1>
                </div>
                <div class="content content-about-us">
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
                        <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" target="_blank" rel="noopener noreferrer">
                            <?php echo get_field('text_button', $currend_id); ?>
                        </a>
                    </div>
                </div>
                <div class="content content-who-are-we">
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
                        <a href="<?php echo site_url('/devpage/'); ?>" class="about__button" target="_blank" rel="noopener noreferrer">
                            <?php echo get_field('text_button', $currend_id); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>