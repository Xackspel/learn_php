<?php
    error_reporting(E_ALL);
    var_dump($_POST);
    if (isset($_GET["name"])) {
        echo $_GET["name"];
    }
    else{
        echo "Empty";
    }
?>