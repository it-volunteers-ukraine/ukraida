<?php
  $this_page_url = get_the_permalink();
?>
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
        <a 
          class="one-news-share__instagram one-news-share__icon"
          href="https://www.instagram.com" 
          target="_blank" 
          rel="noopener noreferrer"
        >
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
          </svg>
        </a>
      </li>
      <li class="one-news-share__social">
        <a 
          class="one-news-share__facebook one-news-share__icon" 
          href="https://www.facebook.com/sharer/sharer.php?u=<?= $this_page_url ?>"
          target="_blank" 
          rel="noopener noreferrer"
        >
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-facebook"></use>
          </svg>
        </a>
      </li>
      <li class="one-news-share__social">
        <a 
          class="one-news-share__xtwitter one-news-share__icon" 
          href="https://twitter.com/intent/tweet?text=<?= $this_page_url ?>" 
          target="_blank" 
          rel="noopener noreferrer"
        >
          <svg class="one-news-share__svg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-twitter"></use>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</section>