<?php
// Функция для проверки простого числа
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Пример вызова функции
$number = 7;
if (isPrime($number)) {
    print("Число {$number} — простое.");
} else {
    print("Число {$number} — не простое.");
}
?>
