<?php
session_start();

// Здесь задаём правильные логин и пароль "жёстко", без БД
$correctLogin = "admin";
$correctPassword = "1234";

// Считываем то, что пользователь прислал из формы
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

// Проверяем соответствие логина и пароля
if ($login === $correctLogin && $password === $correctPassword) {
    // Если данные верны — ставим признак успешной авторизации
    $_SESSION['auth'] = 1;
    // И перекидываем на страницу с «закрытым» контентом
    header("Location: random.php");
    exit();
} else {
    // Если неверно — сбрасываем сессию и возвращаем на страницу логина
    $_SESSION['auth'] = 0;
    header("Location: index.html");
    exit();
}
?>
