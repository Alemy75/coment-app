<?php

$connection = new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', 'root');

$data = [
    "title" => $_POST['title'],
    "text" => $_POST['text']
];

$sql = "INSERT INTO `comments` (`name`, `comment`) VALUES (:title, :text)";
$statement = $connection->prepare($sql);
$result = $statement->execute($data);

$get_data;
