<?php
$currend_id = get_the_ID();
?>
<section class='donate-result'>
    <div class="donate-title__wrap">
        <h2 class="donate-title"><?php the_field('title-result') ?></h2>
        <p class="donate-text"><?php the_field('text-result') ?>
        </p>
    </div>
    <div class="result__container">
    
<?php 
$category_name = 'result';
$category_id = get_cat_ID($category_name);

$params = array(
	'numberposts' => 3,
	'category'    => 'Results',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, // suppression of filters of SQL query change

);
$page = 137;
$query= new WP_Query($params);
$max_pages = $query->max_num_pages;
$is_end_post_list = $page == $max_pages;

$my_posts = $query->get_posts();
foreach( $my_posts as $post ){
	setup_postdata( $post );



?>
	  <div class="result-item">
            <div class="result-item__wrap">
                <div class="result-item__img">
                <?php the_post_thumbnail('adv_thumbnail') ?>
                </div>
                <div class="result-item__text">
                         <h4><?php the_title()?></h4>
                    <div class="result-item__inner">
                        <p>
                            <?php the_field('text')?>
                        </p>
                        <div class="result-item__sum">
                        <p>Загальна сума збору: <br>
                            <span>  <?php the_field('sum')?></span>
                        </p>

                        </div>
                   
                    </div>
                </div>

            </div>

        </div>


<?php }

wp_reset_postdata(); 
?>
    </div>

    <button class="btn" <?php echo $is_end_post_list ? 'hidden' : ''; ?> >
        <?php the_field('btn-result') ?>
    </button>

</section>