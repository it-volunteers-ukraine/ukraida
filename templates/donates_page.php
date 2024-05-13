<?php get_header();
/*
Template Name: donates
*/
?>
<?php
$currend_id = get_the_ID();
$rows = get_field('news_list', $currend_id);

?>

<main>
    <section class="section section__donate1">
        <div class="container container__donate1">
            <h1 class="donate-title">Пожертви</h1>
            <?php get_template_part('parts/donates1', null, []); ?>
        </div>
    </section>  
    <section class="section section__donate2">
        <div class="container container__donate2">
            <?php get_template_part('parts/donates2', null, []); ?>
        </div>
    </section>  
    <section class="section section__donate3">
        <div class="container container__donate3">
            <?php get_template_part('parts/donates3', null, []); ?>
        </div>
    </section>  
    <section class="section donates">
        <div class="container">

            
        </div>

    </section>
</main>
<?php get_footer(); ?>