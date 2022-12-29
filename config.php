<?php

// connect to datbase
$link = mysqli_connect('localhost', 'mwoltz', 'beetle-BALLROOM-think', 'website_tennis');

//check connection
if(!$link){
	echo 'Connection error: ' . mysqli_connect_error();
}

?>

<!DOCTYPE HTML>
<html lang="en">


</html>


<!----- 
	invullen in SQL-query

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

---->