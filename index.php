<?php

require_once('helpers.php');
require_once('data.php');

$page_content = include_template('main.php', [
    'categories' => $categories,
    'ads' => $ads
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => 'Продадим старый хлам!',
    'user_name' -> $user_name,
    'categories' => $categories,
    'is_auth' => $is_auth,
    'user_name' => $user_name
]);

print($layout_content);

?>
