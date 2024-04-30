<?php
$currend_id = get_the_ID();
// $evnt_title = get_field('event_map_link', $currend_id);
// $event_button_map = get_field('event_button_map)', $currend_id);
?>

<div class="event next-event__event">
    <!-- <br>font Lato: <br> -->
    <div class="event-title">
    <?php echo get_field('event_title', $currend_id); ?>
</div>
    <!-- <p class="event-title">
        Die nächste Demonstration für den Frieden in der Ukraine findet am 3. Februar 2024 um 10:30 Uhr auf dem Friedensplatz (Darmstadt) statt.
    </p>
    <p class="event-title-inter">
        <br>font Inter: <br>
        Наступна Демонстрація за мир в Україні відбудеться 03.02.2024 р. за адресою Friedensplatz (Darmstadt) о 10:30 год.
    </p>
    <p class="event-title-inter">
        Die nächste Demonstration für den Frieden in der Ukraine findet am 3. Februar 2024 um 10:30 Uhr auf dem Friedensplatz (Darmstadt) statt.
    </p>
     <button class="event-btn"> Показати на карті</button> -->
    <a href="#event-map" class="event-btn"><?php echo get_field('event_button_text', $currend_id); ?></a>
</div>