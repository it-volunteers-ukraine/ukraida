<?php
$current_id = get_the_ID();

$post_url = get_sub_field('instagram_post_url', $current_id);
$pattern = '/(?:\\/p\\/|\\/reel\\/)([a-zA-Z0-9_-]+)\\//';
preg_match($pattern, $post_url, $matches);

if (isset($matches[1])) {
    $post_id = $matches[1];
    // echo $post_id;
}
?>


