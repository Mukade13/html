<?php
session_start();
// Завершаем сессию (сбрасываем все сессионные данные)
session_destroy();
// Возвращаем пользователя на страницу логина
header("Location: index.html");
exit();
?>
