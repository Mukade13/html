<?php
session_start();

// Проверяем, выставлена ли сессионная переменная auth
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 1) {
    // Если не авторизован (не 1) — отправляем обратно на страницу входа
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Случайный контент</title>
</head>
<body>
    <h1>Добро пожаловать!</h1>
    <p>Вот ваш случайный контент: <strong><?php echo rand(1000, 9999); ?></strong></p>

    <p>Сюда можно попасть только после авторизации.</p>

    <a href="logout.php">Выйти</a>
</body>
</html>
