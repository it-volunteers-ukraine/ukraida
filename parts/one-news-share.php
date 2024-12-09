<section class="section one-news__share">
  <h2 class="one-news-share__title">
    <?php 
      $text = get_field('one_news_share_title');
        if ($text) :
          echo wp_kses_post($text); 
        else : ?>
          <p class="one-news__no-text">Текст відсутній</p>
    <?php endif; ?>
  </h2>
  <ul class="one-news-share__group">
      <li class="one-news-share__social">
        <a class="one-news-share__instagram one-news-share__icon" href="https://www.instagram.com/<?php the_field('instagram', 'option') ?>" target="_blank" rel="noopener noreferrer">
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
          </svg>
        </a>
      </li>
      <li class="one-news-share__social">
        <a class="one-news-share__facebook one-news-share__icon" href="<?php the_field('facebook_link', 'option') ?>" target="_blank" rel="noopener noreferrer">
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
          </svg>
        </a>
      </li>
      <li class="one-news-share__social">
        <a class="one-news-share__xtwitter one-news-share__icon" href="<?php the_field('xtwitter_link', 'option') ?>" target="_blank" rel="noopener noreferrer">
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</section>