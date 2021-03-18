<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";


$sql = "
create table order_items
(
	id int PRIMARY KEY AUTO_INCREMENT ,
	product_id int,
	cont int,
	order_id int,
	 
		foreign key (product_id) references product_img (id)
			on update cascade on delete cascade
		

	
)";
execute($sql);

$sql = "
create table orders
(
	id int PRIMARY KEY AUTO_INCREMENT ,
	user_id int,
	address text,
	status_id int,
	date date,
	 
        foreign key (user_id) references users (id)
			on update cascade on delete cascade
	
)";

execute($sql);