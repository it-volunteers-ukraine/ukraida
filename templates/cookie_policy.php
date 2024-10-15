<?php get_header();
/*
Template Name: Cookie Policy
*/
$currend_id = get_the_ID();

$title = esc_html(get_field('cookie_policy_title'));
$text = get_field('cookie_policy_text');
?>

<main>
    <section class="section cookie-policy">
        <div class="container container__cookie-policy">
            <h1 class="cookie-policy-title"><?= $title ?></h1>
            <div class="cookie-policy-content">
                <?= $text ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>