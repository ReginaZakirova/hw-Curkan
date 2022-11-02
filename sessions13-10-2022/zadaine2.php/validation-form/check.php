<?php
$login = htmlspecialchars(trim($_POST['login']));
$pass = htmlspecialchars(trim($_POST['pass']));

if (mb_strlen($login) < 2 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit ();
}
else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 32) {
    echo "Недопустимая длина пароля (от 6 до 32 символов)";
    exit ();
}

$pass = md5($pass."you shall not pass");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
'$login'");
$user = $result->fetch_assoc();
if (empty($user) == false) {
    echo "Такой пользователь уже зарегистрирован";
    exit();
}
//$mysql->close();

$mysql->query("INSERT INTO `users` (`login`, `pass`) 
VALUES('$login', '$pass')");

setcookie('user', $login, time() + 3600, "/");

$mysql->close();

header('Location: ../authorization.php');
?>