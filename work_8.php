<?php
function generateRandomPassword($length = 8) {
    // Символы, которые могут быть использованы в пароле
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    // Переменная для хранения пароля
    $password = '';
    
    // Генерация пароля
    for ($i = 0; $i < $length; $i++) {
        // Выбор случайного символа из строки $characters
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }
    
    return $password;
}

// Вызов функции для генерации пароля длиной 12 символов
$password = generateRandomPassword(12);
print("Случайный пароль: {$password}");
?>
