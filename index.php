<?php
    session_start();

    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");
    $statement = $pdo -> query("SELECT * FROM posts");
    $posts = $statement -> fetchall(PDO::FETCH_ASSOC);  
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
        <h1 class="text-center">Module #1. Home Task.</h1>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($posts as $post):?>
                <div class="col-md-4">
                    <h2><?php echo $post["name"]?></h2>
                    <p><?php echo $post["description"]?></p>
                    <button type="button" class="btn btn-success" onclick="document.location='newpost.php'">New Post</button>
                    <button type="button" class="btn btn-primary">Update Post</button>
                    <button type="button" class="btn btn-dark">Delete Post</button>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>