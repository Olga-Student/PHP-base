<?php


session_start();
if (!$_SESSION['user']){
    header('location: index_exit.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пользовательская страница</title>
    <link rel="stylesheet" href="css/main_login.css">
</head>
<body>

 <form class action="#" method="post">
     <h3>Моя страница</h3>
     <img style="margin: 10px 0" src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
     <h2><?= $_SESSION['user']['full_name'] ?> </h2>
     <a href="#"><?= $_SESSION['user']['email'] ?></a>
     <a style="margin: 10px 0; width: 200px; text-align: center" href="/" >Перейти к покупкам</a>
     <a style="margin: 10px 0; width: 200px; text-align: center" href="logout.php" >Выход</a>
 </form>