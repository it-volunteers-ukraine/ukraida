<?php

$currend_id = get_the_ID();
$my_map_link = get_field('event_map_link', $currend_id);
$my_map_iframe = get_field('event_map_iframe', $currend_id);
$map_src = $my_map_link;
if (!empty($my_map_iframe)) {
    preg_match('~iframe.*src="([^"]*)"~', $my_map_iframe, $frame_src);
    $map_src = $frame_src[1];
}
?>
<div class="event-map">
    <iframe src="<?php echo $map_src; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>