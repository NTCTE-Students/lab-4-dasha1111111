<?php
function findMax($numbers) {
    // Проверяем, что массив не пустой
    if (count($numbers) == 0) {
        return 'Массив пуст';
    }

    // Инициализируем переменную для максимального числа
    $max = $numbers[0];

    // Перебираем все элементы массива
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}
// Вызов функции
$numbers = [3, 5, 7, 2, 8, 1];
$result = findMax($numbers);

print("Максимальное число в массиве: {$result}");
?>
