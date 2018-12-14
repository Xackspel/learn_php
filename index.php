<?php
    // $months = ["January", "February", "April", "May"];
    // foreach ($months as $month){
    //     echo $month . PHP_EOL;
    // }

    // $a = 0;
    // while ($a++ < 10) {
    //     echo $a.PHP_EOL;
    // }

    // $a = 0;
    // do {
    //     echo $a.PHP_EOL;
    // } while ($a <= 10);

    // $a = 0;
    // for ($a=0; $a <100; $a++) { 
    //     echo $a.PHP_EOL;
    //     continue;
    // }

    // $months = ["January", "February", "April", "May", "June", "July", "August"];
    // foreach ($months as $month) {
    //     if ($month == "February") {
            
    //     }
    //     else {
    //         echo $month.PHP_EOL;
    //     }
    // }

    //Task Піти в магазин. купити Cola или Sprite інашке купи Fanta;
    // $drinks = ["mineral", "destilated", "water","Cola", "Pepsi", "Fanta", "Sprite", "Mineral","Beer", "Vodka"];
    //   $drinks_regular = ["mineral", "destilated", "water"],
    //    $drinks_sparkling = ["Cola", "Pepsi", "Fanta", "Sprite", "Mineral"],
    //    $dirnks_alcohol = ["Beer", "Vodka"],
    //];
    
    // foreach ($drinks as $drink) {
    //     if ($drink == "Cola") {
    //         echo "Great, I bought Cola";
    //     }
    //     elseif ($drink == "Sprite") {
    //         echo "Well, I have didn't found Cola, but I have bought the Sprite";
    //     }
    //     elseif ($drink == "Fanta") {
    //         echo "Well, I have didn't found Cola or Sprite, but I have bought the Fanta";
    //     }
    //     else {
    //         echo "Oops, I have didn't found anithing that you want, so I should return and check again";
    //     }
        
    // }

    $drinks = ["Mineral", "Destilated", "Water","Cola", "Pepsi", "Fanta", "Sprite","Beer", "Vodka"];

    $drink_rand = array_rand($drinks);
    //echo $drink_rand.PHP_EOL;

    if ($drink_rand == 3) {
        echo "Great, I have bought Cola!!!".PHP_EOL;
    }
    elseif ($drink_rand == 7) {
        echo "Well, I have didn't found Cola, but I have bought the Sprite".PHP_EOL;
    }
    elseif ($drink_rand == 6) {
        echo "Hey, I have didn't found Cola or Sprite, but I have bought the Fanta".PHP_EOL;
    }
    else {
        echo "Oops, I have didn't found anithing that you want, so I should return and check again!".PHP_EOL;
    }
?>
