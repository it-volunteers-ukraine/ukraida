<!-- <h2 class="about">About parts  parts/about.php</h2> -->

<?php
$rows = get_field('img-text');
if ($rows) {
};
?>

<section class="img-text section">

    <h2 class="title__content img-text__title img-text__title--mob"><?php echo $rows[0]['img-text_title'] ?></h2>
    <div class="img-text__wrap">
        <div class="img-text__img">
            <picture>
                <source media="(min-width: 650px)" srcset="<?php echo $rows[0]['img-text_fon']  ?>">
                <img src="<?php echo $rows[0]['img-text_fon'] ?>" alt="">
            </picture>

        </div>
        <div class="img-text__content">
            <h2 class="title__content img-text__title img-text__title--mob"><?php echo $rows[0]['img-text_title'] ?></h2>
            <?php echo $rows[0]['img-text_text'] ?>

            <div class="img-text__button">
                <a href="/devpage" class="img-text__btn">
                    <?php echo $rows[0]['img-text-btn'] ?></a>
            </div>

        </div>
    </div>

</section>
<?php
$blockIcons = get_field('block-icons');
if ($blockIcons) { ?>

    <section class="block-icons section">
        <div class="block-icons__container">
            <h2 class="title__content block-icons__title "><?php echo $blockIcons[0]['title'];  ?></h2>
            <div class="block-icons__wrap">

                <?php foreach ($blockIcons[0]['block-icons_content'] as $content) { ?>
                    <div class="block-icons__item">
                        <div class="block-icons__icon">
                            <img src="<?php echo $content['block-icons__icon'] ?>" alt="">

                        </div>
                        <div class="block-icons__text">
                            <?php echo $content['block-icons__text'] ?>
                        </div>
                    </div>

                <?php   } ?>


            </div>
        </div>
    </section>

    <?php    ?>
<?php };
?>

<?php
$rowNumber = get_field('block-number');
if ($rowNumber) { ?>

<section class="block-icons section block-icons--num">

    <h2 class="title__content block-icons__title block-icons__title--num ">
        <h2 class="title__content block-icons__title "><?php echo $rowNumber[0]['block-number-title']; ?></h2>
    </h2>
    <div class="block-icons__wrap">


        <?php
        foreach ($rowNumber[0]['block-number_content'] as $content) {

        ?>

            <div class="block-icons__item">

                <div class="block-icons__item-fon">
                    <div class="block-icons__item-fon-bl"></div>
                    <div class="block-icons__item-fon-ye"></div>
                </div>
                <div class="block-icons__num-inner">
                    <div class="block-icons__num">+ <?php echo $content['number']; ?></div>
                    <div class="block-icons__text"><?php echo $content['text']; ?>
                    </div>
                </div>

            </div>



        <?php }
        ?>

    </div>

</section>




<?php   }

?>



<section class="img-text img-text--reverse section">

    <h2 class="title__content img-text__title img-text__title--mob"><?php echo $rows[1]['img-text_title'] ?></h2>
    <div class="img-text__wrap">

        <div class="img-text__content">
            <h2 class="title__content img-text__title img-text__title--desc"><?php echo $rows[1]['img-text_title'] ?></h2>
            <?php echo $rows[1]['img-text_text'] ?>
            <div class="img-text__button">
                <a href="/devpage" class="img-text__btn-advanced">
                    <?php echo $rows[1]['img-text-btn'] ?></a>
            </div>

        </div>
        <div class="img-text__img">
            <picture>
                <source media="(min-width: 650px)" srcset="<?php echo $rows[1]['img-text_fon']  ?>">
                <img src="<?php echo $rows[1]['img-text_fon'] ?>" alt="">
            </picture>

        </div>
    </div>

</section>