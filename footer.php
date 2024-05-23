            <footer class="footer">
                <div class="container">
                    <div class="footer-main__wrap">
                        <div class="footer__inner-wrap">
                            <a href="/" class="logo1"><img class="logo_img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Logo" /></a>
                            <ul class="privacy__list">
                                <li class="privacy__item">
                                <!-- <a href="<?php the_field('privacy_policy_page_text', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="privacy__link">Impressum</a> -->
                                <a href="/privacy/?type=policy" target="_blank" rel="noopener noreferrer" class="privacy__link">Impressum</a>
                                </li>
                                <li class="privacy__item privacy__item-order">
                                    <!-- <a href="<?php the_field('data_protection_page_text', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="privacy__link">Datenschutz</a> -->
                                    <a href="privacy/?type=data" target="_blank" rel="noopener noreferrer" class="privacy__link">Datenschutz</a>
                                </li>
                            </ul>
                            <ul class="social-media__list">
                                <li class="social-media__item">
                                    <a class="social-media__link" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#instagram"></use>
                                        </svg>@<?php the_field('instagram', 'option') ?>
                                    </a>
                                </li>
                                <li class="social-media__item">
                                    <a class="social-media__link" href="mailto:<?php the_field('email', 'option') ?>" target="_blank" rel="noopener noreferrer">
                                        <svg class="social__icon">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#email"></use>
                                        </svg><?php echo the_field('email', 'option') ?>
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
