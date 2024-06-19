            <footer class="footer">
                <div class="container">
                    <div class="footer-main__wrap">
                        <div class="footer__inner-wrap">
                            <a href="/" class="logo1"><img class="logo_img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Logo" /></a>
                            <ul class="privacy__list">
                                <li class="privacy__item">
                                <a href="/privacy/?type=policy" target="_blank" rel="noopener noreferrer" class="privacy__link"><?php the_field('privacy_policy_title', 'option') ?></a>
                                </li>
                                <li class="privacy__item privacy__item-order">
                                    <a href="/privacy/?type=data" target="_blank" rel="noopener noreferrer" class="privacy__link"><?php the_field('privacy_data_title', 'option') ?></a>
                                </li>
                            </ul>
                            <ul class="social-media__list">
                                <li class="social-media__item">
                                    <a class="social-media__link" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                                        </svg>@<?php the_field('instagram', 'option') ?>
                                    </a>
                                </li>
                                <li class="social-media__item">
                                    <a class="social-media__link" href="mailto:<?php the_field('email', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-email"></use>
                                        </svg><?php echo the_field('email', 'option') ?>
                                    </a>
                                </li>
                                <li class="social-media__item">
                                    <a class="social-media__link" href="<?php the_field('facebook_link', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
                                        </svg><?php the_field('facebook_title', 'option') ?>
                                    </a>
                                </li>
                                <li class="social-media__item">
                                    <a class="social-media__link" href="<?php the_field('xtwitter_link', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon icon-test">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
                                        </svg><?php the_field('xtwitter_title', 'option') ?>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <p class="copyright__desc">&#169; <?php echo date( "Y" ); ?> <?php the_field('copyright_text', 'option') ?></p>
                    </div>
                </div>
            </footer>
        </div>
    <?php wp_footer(); ?>
    </body>
</html>
