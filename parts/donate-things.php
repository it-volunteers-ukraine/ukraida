<?php
$currend_id = get_the_ID();
?>

<div class="donate-things__block">
    <div class="donate-things__container">
        <h1 class="donate-things__title"><?php echo get_field('title__donate-things', $currend_id); ?></h1>

        <div class="donate-things__block-text">
            <div class="donate-things__text">
                <?php echo get_field('text__donate-things', $currend_id); ?>
            </div>
        </div> 
        <div class="donate-things__media-wrapper">
            <div class="donate-things__media">
                <a class="social-media__link" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank" rel="noopener noreferrer">
                    <svg class="social__icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                    </svg>
                    <span class="donate-things__media__text">@<?php the_field('instagram', 'option') ?></span>
                </a>
                <a class="social-media__link" href="mailto:<?php the_field('email', 'option') ?>" target="_blank" rel="noopener noreferrer">
                    <svg class="social__icon">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-email"></use>
                    </svg>
                    <span class="donate-things__media__text"><?php echo get_field('email', 'option'); ?></span>
                </a>
            </div>
        </div>    
    </div>
</div>
    
        

    