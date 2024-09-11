<?php
$current_id = get_the_ID();

$post_url = get_sub_field('instagram_post_url', $current_id);
$pattern = '/(?:\\/p\\/|\\/reel\\/)([a-zA-Z0-9_-]+)\\//';
preg_match($pattern, $post_url, $matches);

if (isset($matches[1])) {
    $post_id = $matches[1];
    // echo $post_id;
}
$args = array(
    'hidecaption' => true,  // Скрыть подпись
);
// $embed_code = wp_oembed_get($post_url, $args);
// $dom = new DOMDocument();

// echo $embed_code;

$postUrl = 'https://www.instagram.com/p/ABC12345678/';

// URL для запроса oEmbed с параметром hidecaption=true
$oembedUrl = 'https://api.instagram.com/oembed/?url=' . urlencode($post_url) . '&hidecaption=true';

// Выполняем запрос к API
$response = file_get_contents($oembedUrl);

// Проверяем, успешно ли выполнен запрос
if ($response === false) {
    echo 'Ошибка при выполнении запроса к API Instagram.';
} else {
    // Выводим необработанный ответ для диагностики
    echo 'Необработанный ответ от API: ' . htmlspecialchars($response) . '<br>';

    // Преобразуем JSON-ответ в массив PHP
    $data = json_decode($response, true);

    // Проверяем, успешно ли декодирован JSON
    if (json_last_error() === JSON_ERROR_NONE) {
        // Выводим HTML-код для встраивания поста
        echo $data['html'];
    } else {
        echo 'Ошибка при декодировании JSON-ответа: ' . json_last_error_msg();
    }
}

?>


