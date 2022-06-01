<?php

$carArray = ['car1','car2','car3','car4'];

$arrayCount = count($carArray);


// for-------------


// for ($i=0; $i<$arrayCount; $i++){
//     echo $carArray[$i];
// }

// foreach--------------

// foreach($carArray as $value){
//     echo $value. "<br>";
// }


// Associate---------------

// $car1_associate_array = ["model" => "2021", "power" => "90000", "color" => "white"];

// foreach($car1_associate_array as $i => $value){
//     echo $value."<br>";
// }

// MD_Array-------------

$cars = [

    ["car1",11,22],
    ["car2",33,44],
    ["car3",55,66],
    ["car4",77,88]

];

foreach($cars as $value){

    foreach($value as $val){
        echo $val."<br>";
    }
}

?>