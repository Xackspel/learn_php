<?php
    session_start();

    $PostId =  $_POST['Id']; // Retreiweing post Id
    $IntPostId = 1 * $PostId; // convert to Int
    $PostName = $_POST['PostName']; //Retreiweing Post Name
    $PostText = $_POST['PostText']; //Retreiweing Post Text
    var_dump($_POST);
    var_dump($IntPostId);
    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");
    $statement = $pdo -> query("UPDATE `posts` SET `name`='$PostName',`description`='$PostText' WHERE Id='$IntPostId'");
    var_dump($statement);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="bg-dark p-4">
            <div class=row>
                <div class="col-sm">
                    <img src="http://marlindev.ru/img/new/logo.svg" alt="Marlin dev school" title="Marlin dev school">
                </div>
                <div class="col-sm">
                    <font color="white"><h2 class="text-right" color="white">Aleksey Zhuk [ 1 ]</h2></font>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <h1 class="text-center">The post have been Updated!</h1>
        <br>
    </div>
    <div class="container">
        <form action="newpost.php">
            <button type="button" class="btn btn-dark" onclick="document.location='index.php'">Return to homepage</button>
        </form>
    </div>
</body>
</html>