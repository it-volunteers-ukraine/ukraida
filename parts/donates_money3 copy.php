<?php
$currend_id = get_the_ID();
?>
<section class='donate-result'>
    <div class="donate-title__wrap">
        <h2 class="donate-title"><?php the_field('title-result') ?></h2>
        <p><?php the_field('text-result') ?>
        </p>
    </div>
    <div class="result__container">

        <?php
        $category_name = 'result';
        $category_id = get_cat_ID($category_name);

        $params = array(
            'posts_per_page' => 2,
            'category'    => 'Results',
            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // suppression of filters of SQL query change

        );
        $page = 137;
        $query = new WP_Query($params);
        $max_pages = $query->max_num_pages;
        $is_end_post_list = $page == $max_pages;

        $my_posts = $query->get_posts();
        foreach ($my_posts as $post) {
            setup_postdata($post);



        ?>
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


        <?php }

        wp_reset_postdata();
        ?>


        <?php
        $args = array(
            'post_type' => 'post-types-donates-m',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) {
            $query->the_post();
            $img = get_field('donates_money_img');
            $actually = get_field('donates_actually');

            // echo get_field('donates_money_title');
            // echo get_field('donates_money_start');
            // echo get_field('donates_actually');

            if ($actually == 0) {

        ?>

                <div class="result-item">
                    <div class="result-item__wrap">
                        <div class="result-item__img">
                            <img src="<?php echo $img['url'] ?>" alt="foto">
                        </div>
                        <div class="result-item__text">
                            <h4>
                                <?php echo get_field('donates_money_title'); ?>
                            </h4>
                            <div class="result-item__inner">
                                <p>
                                    <?php echo get_field('donates_money_text'); ?>
                                </p>
                                <div class="result-item__sum">
                                    <p>Загальна сума збору: <br>
                                        <span>
                                            <?php echo get_field('donates_money_sum'); ?>
                                        </span>
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>


        <?php
            }
        }
        ?>



    </div>

    <button class="btn" <?php echo $is_end_post_list ? 'hidden' : ''; ?>>
        <?php the_field('btn-result') ?>
    </button>

</section>