<?php
function sumOfDigits($number) {
    $sum = 0;
    // Преобразуем число в строку, чтобы можно было перебрать все цифры
    $digits = str_split(abs($number)); // abs() для обработки отрицательных чисел

    // Проходим по каждой цифре и добавляем её к сумме
    foreach ($digits as $digit) {
        $sum += (int)$digit; // Преобразуем символ обратно в число
    }

    return $sum;
}

// Вызов функции
$number = 12345;
$result = sumOfDigits($number);
print("Сумма цифр числа {$number}: {$result}");
?>