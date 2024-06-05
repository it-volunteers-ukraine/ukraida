<?php get_header();
/*
Template Name: donates money
*/
?>
<?php
$currend_id = get_the_ID();
$rows = get_field('news_list', $currend_id);

?>

<main>
    <section class="section section__donate1">
        <div class="container container__donate1">
            <h1 class="donate-gl-title">Грошові Пожертви</h1>
            <?php get_template_part('parts/donates_money1', null, []); ?>
        </div>
    </section>  
    <section class="section section__donate2">
        <div class="container container__donate2">
            <?php get_template_part('parts/donates_money2', null, []); ?>
        </div>
    </section>  
    <section class="section section__donate3">
        <div class="container container__donate3">
            <?php get_template_part('parts/donates_money3', null, []); ?>
        </div>
    </section>  
    <section class="section section__donate4">
        <div class="container container__donate4">
            <?php get_template_part('parts/donates_money4', null, []); ?>
        </div>
    </section>  
</main>
<?php get_footer(); ?>