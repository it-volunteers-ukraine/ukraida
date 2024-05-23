<?php get_header();
/*
Template Name: Privacy
*/
$currend_id = get_the_ID();
?>

<div class="wrapper">
    <main>
        <section class="section section_privacy">
            <div class="container container_privacy">
                <div class="privacy">
                    <?php
                    if (isset($_GET['type'])) {
                        // Получаем значение параметра 'type' и очищаем его для безопасности
                        $type = sanitize_text_field($_GET['type']);
                        if ($type == "policy") {
                            the_field('privacy_policy_text', $currend_id);
                        } elseif ($type == "data") {
                            the_field('privacy_data_protection_text', $currend_id);
                        } else {
                            the_field('privacy_policy_text', $currend_id);
                        }
                    } else {
                        the_field('privacy_policy_text', $currend_id);
                    }
                    ?>
                    <!-- <?php the_field('privacy_policy_page_text', $currend_id); ?> -->
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>