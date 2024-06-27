<?php

?>
<section class='donate-result'>
    <div class="donate-title__wrap">
        <h2 class="donate-title"><?php the_field('title-result') ?></h2>
        <p><?php the_field('text-result') ?>
        </p>
    </div>
    <?php
    $arg = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category'    => 'Results',
        'posts_per_page'    => '2',
        'paged'    => 1,

    );

    $blog_posts = new WP_Query($arg);
    ?>
    <div class="result__container">


        <?php if ($blog_posts->have_posts()) : ?>
            <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>


           
           <div class="result-item">
                    <div class="result-item__wrap">
                        <div class="result-item__img">
                            <?php the_post_thumbnail('adv_thumbnail') ?>
                        </div>
                        <div class="result-item__text">
                            <h4><?php the_title() ?></h4>
                            <div class="result-item__inner">
                                <p>
                                    <?php the_field('text') ?>
                                </p>
                                <div class="result-item__sum">
                                    <p>Загальна сума збору: <br>
                                        <span> <?php the_field('sum') ?></span>
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>



            <?php endwhile; ?>

        <?php endif; ?>
    </div>
<?php 
global $wp_query;
// текущая страница
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
// максимум страниц
$max_pages = $blog_posts->max_num_pages;
var_dump($max_pages);
 
// если текущая страница меньше, чем максимум страниц, то выводим кнопку
if( $paged < $max_pages ) {

  echo  '<button id="loadmore"  class="btn" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '">
     Загрузить ещё
    </button>';
}
 
?>
  

</section>