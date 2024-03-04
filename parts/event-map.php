<!-- <h2 class="event-map">MAP  parts/event-map.php</h2> -->
<?php
// $map_link ="https://maps.app.goo.gl/mzKE7j97WorMGp1n7"
// $map_link = "https://www.google.com/maps/place/Sorbenweg+11,+99099+Erfurt,+%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D1%8F/@50.9715055,11.051363,19.07z/data=!4m6!3m5!1s0x47a472b5c1f65b57:0x6c6a07c19d8afd78!8m2!3d50.9717107!4d11.0509211!16s%2Fg%2F11cpl_s6mf?entry=ttu"
// $map_link = "https://maps.app.goo.gl/89g2U7Dg1uaSQKDY7"
$map_link = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d598.7024298963122!2d11.051363037121536!3d50.97150552945753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a472b5c1f65b57%3A0x6c6a07c19d8afd78!2zU29yYmVud2VnIDExLCA5OTA5OSBFcmZ1cnQsINCT0LXRgNC80LDQvdC40Y8!5e0!3m2!1sru!2ssk!4v1709549690577!5m2!1sru!2ssk"

?>
<!-- <div class="contacts__line line"></div> -->
<!-- <?php the_field('contacts__title', $current_id); ?> -->
<div class="event-map">
    <!-- <iframe src="<?php the_field('contacts__map__link', $current_id); ?>" width="100%" height="100%" style="border:0; filter: invert(90%) hue-rotate(180deg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <iframe src="<?php echo $map_link; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>