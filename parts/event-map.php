<?php
$currend_id = get_the_ID();
$my_map_src = get_field('map_link', $currend_id);
?>
<div class="event-map">
    <iframe src="<?php echo $my_map_src; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
