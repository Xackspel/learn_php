<?php
    session_start();

    $posts = [
        [
            "title" => "First steps in learning language",
            "desc" => "Lorem ipsum dolor sit amet, volutpat pertinacia interpretaris"
        ],
        [
            "title" => "Second steps in learning language",
            "desc" => "Lorem ipsum dolor sit amet, volutpat pertinacia interpretaris"
        ],
        [
            "title" => "Third steps in learning language",
            "desc" => "Lorem ipsum dolor sit amet, volutpat pertinacia interpretaris"
        ],

    ];
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
            <?php foreach($posts as $post){echo $post};?>
        </div>
    </div>
</body>
</html>