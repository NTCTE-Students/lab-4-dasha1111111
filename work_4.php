<?php
function sortArray($numbers) {
    sort($numbers);  // Используем функцию sort для сортировки массива по возрастанию
    return $numbers; // Возвращаем отсортированный массив
}

// Вызов функции
$numbers = [5, 2, 8, 1, 4];
$sortedArray = sortArray($numbers);

// Вывод отсортированного массива
print("Отсортированный массив: ");
print_r($sortedArray);
?>