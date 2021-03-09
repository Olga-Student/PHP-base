<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';
$connection = mysqli_connect($host, $login, $password, $dbName);
$sql = "
 CREATE TABLE products (
    id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(100) NOT NULL ,
    description TEXT, 
    price float DEFAULT 0
 )";
$sql = "CREATE TABLE product_img(
    id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(150) NOT NULL ,
    link varchar(200) NOT NULL     
)";
$sql = "ALTER TABLE product_img ADD COLUMN (views int default 0)";


$res = mysqli_query($connection, $sql);
var_dump(mysqli_error($connection));