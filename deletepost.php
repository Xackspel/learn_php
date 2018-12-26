<?php
    session_start();

    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");
    $statement = $pdo -> query("DELETE FROM `posts` WHERE name='Fourth step in learning language'");
    var_dump($statement);
?>