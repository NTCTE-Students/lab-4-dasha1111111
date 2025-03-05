<?php
// Функция для вычисления среднего арифметического массива
function average($numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $sum / $count;
}

// Пример вызова функции
$numbers = [10, 20, 30, 40, 50];
$result = average($numbers);

print("Среднее арифметическое: {$result}");
?>
