<?php

$connection = new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', 'root');
$statement = $connection->prepare("SELECT * FROM `comments`");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
$get_data = json_decode($json);