<?php

require_once('helpers.php');
require_once('data.php');

function price_format($price) 
{
    // округление дробной части числа в большую сторону
    $price_round = ceil($price);

    // добавление разделителя тысяч в виде пробела
    if ($price_round > 999) {
        $price_thousands_separator = number_format($price_round, 0, ',', ' ');
    }   
    else {
        $price_thousands_separator = $price_round;
    }
    
    // добавление к числу знака рубля
    $nice_price = $price_thousands_separator . " ₽.";
    
    return $nice_price;
}

$is_auth = rand(0, 1);


$page_content = include_template('main.php', [
    'categories' => $categories, 
    'ads' => $ads
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => 'Продадим старый хлам!',
    'user_name' -> $user_name,
    'categories' => $categories,
    'is_auth' => $is_auth
]);


print($layout_content);
?>