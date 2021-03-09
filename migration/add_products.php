<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';
$connection = mysqli_connect($host, $login, $password, $dbName);
$sql = "INSERT INTO products (title, description, price) 
        VALUE ('АК-47', 'автомат калашникова', 100),
        ('Кольт', 'пистолет', 100),
        ('Ружье', 'ружье', 100),
        ('Нож', 'нож', 100)
";
$sql = "INSERT INTO product_img (title, link)  
   VALUE ('Живой уголок Ручеек', 'Живой уголок ручеек.jpg'),
         ('Книжная выставка с ящиками', 'Книжная выставка с ящиками.jpg'),
         ('Кухня', 'Кухня.jpg'),
         ('Лавка с медведями', 'Лавка с медведями.jpg'),
         ('Парикмахерская', 'Парикмахерская.jpg'),
         ('Парта для кукол', 'Парта для кукол.jpg'),
         ('Пеленальный столик', 'Пеленальный столик.jpg'),
         ('Полка для игрушек подвесная', 'Полка для игрушек подвесная.jpg')    
    ";

$res = mysqli_query($connection, $sql);
var_dump(mysqli_error($connection));