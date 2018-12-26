<?php
    session_start();
    
    $PostId = $_GET['Id'];
    $pdo = new PDO("mysql:host=learnphp;dbname=testing","root","");
    
    $CurrentPost = $pdo -> query("SELECT `Id`, `name`, `description` FROM `posts` WHERE Id='$PostId'");
    $posts = $CurrentPost -> fetchall(PDO::FETCH_ASSOC); 
    
    $NamePost = $posts[0]['name'];
    $TextPost = $posts[0]['description'];
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
        <h1 class="text-center">Delete This Post ?</h1>
        <br>
    </div>
    <div class="container">
        <form action="confirmdeleting.php">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Post Name</span>
                </div>
                <input type="text" name="PostName" class="form-control" placeholder="<?php echo $NamePost?>" aria-label="Postname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Post Text &nbsp&nbsp</span>
                </div>
                <input name="PostText" class="form-control" aria-label="Postext" placeholder="<?php echo $TextPost?>">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-primary" onclick="document.location='confirmdeleting.php?Id=<?php echo $PostId?>'">Confirm Delete</button>
        <button type="button" class="btn btn-dark" onclick="document.location='index.php'">Cancel</button>
    </div>
</body>
</html>