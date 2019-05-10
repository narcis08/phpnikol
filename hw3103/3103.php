<?php

/*1. Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
"a-g" на пустоту.*/

$texts = 'Laremg ipsum dolor sit amet, consectetur 
adipisicing elit. Consequatur cum, minus mollitia suscipit voluptas voluptatum!';
if (strlen($texts)>10) {
    $rest = substr($texts,0,10);
    $array = ['a', 'g'];
    echo str_replace($array, '_', $rest);
};





/*
Задание:2
Взять Html разметку:
" <div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
<span class="dc-title">Любой текст</span></p>
</div>";
Удалить все html теги. Вывести количество символом после фильтрации.
*/


$text = '<div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span>  
<span class="dc-title">text</span></p>
</div>';

$count = strip_tags($text);
$arr = str_split($count);

echo $result = count($arr);
?>

