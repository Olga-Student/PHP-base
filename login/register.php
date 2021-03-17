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
 <form action="registering.php" method="post" enctype="multipart/form-data">
     <label>ФИО</label>
     <input type="text" name="full_name" placeholder="Введите свое полное имя">
     <label>Логин</label>
     <input type="text" name="login" placeholder="Введите свой логин">
     <label>Почта</label>
     <input type="text" name="email" placeholder="Введите адрес электронной почты">
     <label>Изображение профиля</label>
     <input type="file" name="avatar">
     <label>Пароль</label>
     <input type="text" name="password" placeholder="Введите пароль">
     <label>Подтверждение пароля</label>
     <input type="text" name="password_cop" placeholder="Введите подтверждение пароля">
     <?php
     if($_SESSION['massage']){
        echo ' <p class="msg"> '. $_SESSION['massage'] .'</p>';
     }
     unset($_SESSION['massage']); // закрыть сообщение
     ?>


     <button type="submit">Зарегистрироваться</button>
     <p>
          У вас есть аккуант? - <a href="index_exit.php">авторизируйтесь</a>
     </p>

 </form>


</body>
</html>
