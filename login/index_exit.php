<?php
session_start();
if ($_SESSION['user']){
    header('location: user_profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации и регистрации</title>
    <link rel="stylesheet" href="css/main_login.css">
</head>
<body>
 <form action="autohorized.php" method="post">
     <label>Логин</label>
     <input type="text" name="login" placeholder="Введите логин">
     <label>Пароль</label>
     <input type="text" name="password" placeholder="Введите пароль">
     <button type="submit">Войти</button>
     <p>
         У вас нет аккаунта? - <a href="register.php">зарегистрироваться</a>
     </p>
     <?php
     if($_SESSION['massage']){
         echo ' <p class="msg"> '. $_SESSION['massage'] .'</p>';
     }
     unset($_SESSION['massage']); // закрыть сообщение
     ?>
 </form>


</body>
</html>
