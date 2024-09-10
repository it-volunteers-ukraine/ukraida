<!-- https://www.instagram.com/reel/C_DaRGitP36/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA== -->
<!-- https://www.instagram.com/p/C4N994LN7KJ/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA== -->
<!-- https://www.instagram.com/p/C4N8GMptsnX/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA== -->
<?php
$current_id = get_the_ID();
?>
<h2>fsdfsdfsdf</h1>
<div class="swiper swiper-instagram">
    <div class="instagram-list swiper-wrapper">
        <?php if (have_rows('instagram_posts_url', $current_id)): ?>
            <?php while (have_rows('instagram_posts_url', $current_id)): the_row();
                get_template_part('parts/instagram-card', null, []);
            ?>
            <?php endwhile; ?>
            <script src="//www.instagram.com/embed.js"></script>
        <?php endif; ?>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>