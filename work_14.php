<?php
// Функция для форматирования даты
function formatDate($date) {
    $dateObj = DateTime::createFromFormat('Y-m-d', $date);
    return $dateObj->format('d/m/Y');
}

// Пример вызова функции
$date = "2025-03-05";
$formattedDate = formatDate($date);

print("Отформатированная дата: {$formattedDate}");
?>
