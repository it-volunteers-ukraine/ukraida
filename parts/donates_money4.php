<?php
$currend_id = get_the_ID();
?>

<div class="donate4 ">
    <h2 class="donate4-title"><?php echo get_field('donates_money_faq_tittle', $currend_id); ?></h2>
    <div id="accordion" class="faq">
        <?php if (have_rows('donates_money_faq')) : ?>
            <?php
            while (have_rows('donates_money_faq')) :
                the_row();
            ?>
                <div class="accordion-item">
                    <h3 class="faq-title"><?php echo get_sub_field('faq_title') ?>
                        <span class="accordion-icon"></span>
                    </h3>
                    <div class="faq-text-wrap">
                        <p class="faq-text">
                            <?php echo get_sub_field('faq_text'); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>