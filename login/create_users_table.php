<?php

include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";


$sql = "
create table users
(
	id int PRIMARY KEY AUTO_INCREMENT ,
    full_name varchar(250) NULL ,
    login varchar(100) NULL , 
    email varchar(250) NULL ,
	password varchar(500) NULL ,
	avatar varchar(500) NULL 
	
)";

execute($sql);