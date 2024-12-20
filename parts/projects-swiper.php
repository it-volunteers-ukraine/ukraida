<section class="slider">
    <?php
    // Получаем галерею изображений 
    // thumbnail - 150x150
    // medium - 300x300
    // large - 1024x1024
    $gallery = get_field('gallery_swiper', 'option');
    ?>

    <?php
    if ($gallery): ?>
        <div class="slider__container">
            <div class="slider__wrap slider-main swiper-main swiper">
                <div class="slider__track-big swiper-wrapper">
                    <?php foreach ($gallery as $image): ?>
                        <div class="slider__item swiper-slide slider__item--big">
                            <img class="slider__item-fon" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-thumbs-container">
                <div class="slider__wrap slider-thumbs swiper-thumbs swiper">
                    <div class="slider__track swiper-wrapper">
                        <?php foreach ($gallery as $image): ?>
                            <div class="slider__item swiper-slide">
                                <img class="slider__item-fon" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="slider__btn-left swiper-button-prev">
                    <svg class="icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-left"></use>
                    </svg>

                </button>
                <button class="slider__btn-right swiper-button-next">
                    <svg class="icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
                    </svg>
                </button>
            </div>
            <div class="swiper-pagination main-pagination"></div>
        </div>
    <?php else: ?>
    <div class="slider__container">
        <div class="slider__wrap slider-main swiper-main swiper">
            <div class="slider__track-big swiper-wrapper">
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-01.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-02.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-03.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-04.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-05.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-06.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-07.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-08.jpg'; ?>" alt="">
                </div>
                <div class="slider__item swiper-slide slider__item--big">
                    <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-09.jpg'; ?>" alt="">
                </div>
            </div>
        </div>

        <div class="swiper-thumbs-container">
            <div class="slider__wrap slider-thumbs swiper-thumbs swiper">
                <div class="slider__track swiper-wrapper">
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-01.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide active">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-02.jpg'; ?>" alt="">
                    </div>

                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-03.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-04.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-05.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-06.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-07.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-08.jpg'; ?>" alt="">
                    </div>
                    <div class="slider__item swiper-slide">
                        <img class="slider__item-fon" src="<?php echo  get_template_directory_uri() . '/assets/images/projects/f-09.jpg'; ?>" alt="">
                    </div>
                </div>
            </div>
            <button class="slider__btn-left swiper-button-prev">
                <svg class="icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-left"></use>
                </svg>

            </button>
            <button class="slider__btn-right swiper-button-next">
                <svg class="icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
                </svg>
            </button>
        </div>
        <div class="swiper-pagination main-pagination"></div>
    </div>
    <?php endif; ?>
</section>