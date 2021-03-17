<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";
session_start();

$login= $_POST['login'];
$password = md5($_POST['password']);

//$sql = "SELECT * FROM users WHERE login = '{$login}'
                      //AND password = '{$password}'";
//echo $sql;

$check_user = mysqli_query(getConnection(), "SELECT * FROM users WHERE login = '{$login}'
                    AND password = '{$password}'");



if (mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);  //преобразование данных в массив
    $_SESSION['user'] = [
            "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];
    header('location: user_profile.php');
}else{
    $_SESSION['massage'] = "Не верный логин и пароль!";
    header('location: index_exit.php');
}



?>
<pre>
    <?php


    ?>
</pre>




