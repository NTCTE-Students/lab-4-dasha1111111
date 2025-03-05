<?php
// Функция для удаления дубликатов из массива
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Пример вызова функции
$numbers = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($numbers);

print("Массив без дубликатов: ");
print_r($result);
?>