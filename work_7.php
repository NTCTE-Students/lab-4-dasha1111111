<?php
function stringLength($str) {
    $length = 0;
    while (isset($str[$length])) {  // Проверяем, есть ли символ в позиции $length
        $length++;
    }
    return $length;
}

// Вызов функции
$string = "Hello, world!";
$result = stringLength($string);
print("Длина строки: {$result}"); // Результат: 13
?>
