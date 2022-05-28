<?php 

//connect db
$pdo = new PDO('mysql:host=localhost;port=9000;dbname=countries', 'dato', '072fE290@');

//throw error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//fetch date from db
$statement = $pdo->prepare('SELECT * FROM country');
$statement->execute();
$countries = $statement->fetchAll(PDO::FETCH_ASSOC);