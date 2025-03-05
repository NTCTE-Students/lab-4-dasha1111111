<?php
// Функция для конвертации температуры из градусов Цельсия в Фаренгейты
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Вызов функции с примером
$celsius = 25; // Температура в градусах Цельсия
$fahrenheit = celsiusToFahrenheit($celsius);

print("Температура в Цельсиях: {$celsius}°C\n");
print("Температура в Фаренгейтах: {$fahrenheit}°F\n");
?>
