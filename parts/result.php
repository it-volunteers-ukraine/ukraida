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



</div>