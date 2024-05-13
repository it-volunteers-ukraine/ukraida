<?php
$currend_id = get_the_ID();
?>

<div class="event next-event__event">
    <div class="event-title">
    <?php echo get_field('event_title', $currend_id); ?>
</div>
    <a href="#event-map" class="event-btn"><?php echo get_field('event_button_text', $currend_id); ?></a>
</div>