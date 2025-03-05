<?php
// Функция для нахождения второго по величине числа в массиве
function secondLargest($numbers) {
    $uniqueNumbers = array_unique($numbers); // Убираем дубликаты
    rsort($uniqueNumbers); // Сортируем в убывающем порядке
    return isset($uniqueNumbers[1]) ? $uniqueNumbers[1] : null; // Возвращаем второй элемент, если он существует
}

// Пример вызова функции
$numbers = [1, 5, 3, 7, 7, 8];
$result = secondLargest($numbers);

if ($result !== null) {
    print("Второе по величине число: {$result}");
} else {
    print("Второе по величине число не найдено.");
}
?>
