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
        <div class="row">
            <?php foreach($posts as $post):?>
                <div class="col-md-4">
                    <h2><?php echo $post["name"]?></h2>
                    <p><?php echo $post["description"]?></p>
                    <a href="#">Show more</a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>