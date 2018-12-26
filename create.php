<?php
    session_start();

    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");//підключаємось до бази даних
    $statement = $pdo -> query('INSERT INTO posts (name, description) VALUES ("Fifth step in learning language", "Lorem ipsum dolor sit amet, volutpat pertinacia interpretaris")');
    var_dump($statement);
?>