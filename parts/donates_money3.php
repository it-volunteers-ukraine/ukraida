<?php
$currend_id = get_the_ID();
?>
<section class='donate-result'>
    <div class="donate-title__wrap">
        <h2 class="donate-title">Наші результати</h2>
        <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos.Vorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        </p>
    </div>
    <div class="result__container">

<?php 
$my_posts = get_posts( [
	'numberposts' => 3,
	'category_name'    => 'Results',
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // suppression of filters of SQL query change
] );

foreach( $my_posts as $post ){
	setup_postdata( $post );


?>
	  <div class="result-item">
            <div class="result-item__wrap">
                <div class="result-item__img">
                <img src="<?php echo the_field('img')?>" alt="">
                </div>
                <div class="result-item__text">
                    <h4><?php the_field('title')?></h4>
                    <div class="result-item__inner">
                        <p>
                            <?php the_field('text')?>
                        </p>
                        <p>Загальна сума збору: <br>
                            <span>  <?php the_field('sum')?></span>
                        </p>
                    </div>
                </div>

            </div>

        </div>


<?php }

wp_reset_postdata(); // reset $post
?>
    </div>

    <button class="btn">Завантажити більше</button>

</section>