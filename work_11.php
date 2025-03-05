<?php
// Функция для вычисления факториала числа с использованием цикла
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Пример вызова функции
$number = 5;
$result = factorial($number);

print("Факториал {$number} = {$result}");
?>