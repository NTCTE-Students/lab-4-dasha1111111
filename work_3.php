<?php
function countWords($str) {
    // Убираем лишние пробелы по краям строки и разбиваем строку на массив слов
    $words = preg_split('/\s+/', trim($str));

    // Возвращаем количество слов
    return count($words);
}

// Вызов функции
$text = "Это пример строки, которая состоит из нескольких слов.";
$result = countWords($text);

print("Количество слов в строке: {$result}");
?>