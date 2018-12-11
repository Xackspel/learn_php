<?php
    $person = [
        "name" => "Oleksii",
        "surname" => "Zhmud",
        "city" => "Uman",
        "age" => "32",
        "months" => ["January", "February", "April", "May"],
    ];

    foreach ($person["months"] as $month) {
        echo $month;
    }
?>