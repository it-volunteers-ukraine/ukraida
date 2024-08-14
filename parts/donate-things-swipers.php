<?php
    // Swiper id number
    $sin = $args["idNumber"];

    // id's for swiper and controls
    $s_id = "swiper" . $sin;
    $nb_id = "swiper" . $sin . "NextButton";
    $pb_id = "swiper" . $sin . "PrevButton";
    $p_id = "swiper" . $sin . "Pagination";

    // Slider's previous and next svg button's hrefs
    $prev_btn_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-arrow-prev";
    $next_btn_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-arrow-next";
?>

<section>
    <div class="slider__wrapper">
        <button class="slider__button swiper-button-prev" id="<?= $pb_id ?>">
            <svg class="swiper-button-svg">
                <use xlink:href="<?= $prev_btn_href ?>"></use>
            </svg>
        </button>
        <div class="slider">
            <div class="slider__container">
                <div class="slider__wrap slider-main swiper-main swiper" id="<?= $s_id ?>">
                    <div class="slider__track-big swiper-wrapper">
                        <?php
                            $image_urls = get_field('donates_things_images');
                            foreach ($image_urls as $image_url) {
                        ?>
                                <div class="slider__item swiper-slide slider__item--big">
                                    <img class="slider__item-fon" src="<?= $image_url ?>" alt="">
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <button class="slider__button swiper-button-next" id="<?= $nb_id ?>">
            <svg class="swiper-button-svg">
                <use xlink:href="<?= $next_btn_href ?>"></use>
            </svg>
        </button>
    </div>
    <div class="swiper-pagination main-pagination" id="<?= $p_id ?>"></div>
</section>