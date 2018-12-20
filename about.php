<?php
    error_reporting(E_ALL);
    var_dump($_POST);
    if (isset($_POST["myname"])) {
        echo $_POST["myname"];
    }
    else{
        echo "Empty";
    }
?>