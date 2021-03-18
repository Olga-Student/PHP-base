<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";
session_start();

$full_name = $_POST['full_name'];
$login= $_POST['login'];
$email = $_POST['email'];
$password= $_POST['password'];
$password_cop = $_POST['password_cop'];

if ($password === $password_cop){
    $_FILES['avatar']['name'];

    $path = 'avatar/' . time(). $_FILES['avatar']['name'];
    if (! move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
        $_SESSION['massage'] = "Ошибка при загрузке изображения!";
        header('location: register.php');
    }
    $password = md5($password);
    $sql = "INSERT INTO users (full_name, login, email, password, avatar) 
            VALUES ('$full_name ', '$login', '$email', '$password', ' $path')";
    execute($sql);
    $_SESSION['massage'] = "Регистрация прошла успешно!";
    header('location: index_exit.php');
}else{
    $_SESSION['massage'] = "ПАРОЛИ НЕ СОВПАДАЮТ!";
    header('location: register.php');
}