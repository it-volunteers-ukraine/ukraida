<?php
$current_id = get_the_ID();

$post_url = get_sub_field('instagram_post_url', $current_id);
$pattern = '/(?:\\/p\\/|\\/reel\\/)([a-zA-Z0-9_-]+)\\//';
preg_match($pattern, $post_url, $matches);

if (isset($matches[1])) {
    $post_id = $matches[1];
    // echo $post_id;
}
$embed_code = wp_oembed_get($post_url);
$dom = new DOMDocument();

// Отключаем вывод ошибок, чтобы избежать предупреждений при парсинге HTML5
libxml_use_internal_errors(true);

// Загружаем HTML
$dom->loadHTML(mb_convert_encoding($embed_code, 'HTML-ENTITIES', 'UTF-8'));

// Восстанавливаем вывод ошибок
libxml_clear_errors();

// Создаем объект XPath
$xpath = new DOMXPath($dom);

// Ищем все элементы с классом "Caption"
$nodes = $xpath->query('//div[contains(@class, "Caption")]');

// Если узлы найдены, удаляем их
foreach ($nodes as $node) {
    $node->parentNode->removeChild($node);
}

// Сохраняем итоговый HTML
$cleaned_code = $dom->saveHTML();

// Выводим очищенный HTML
echo $cleaned_code;

// echo $embed_code_no_caption;
?>


