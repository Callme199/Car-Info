<?php

// $test = ["p1"=>"p11","p2"=>"p22","p3"=>"p33"];

// foreach ($test as $i=>$value){
//     echo $i;
// }



$test = ['p1','p2','p3'];

$p = [
    ["p1",11,22],
    ["p2",33,44],
    ["p3",55,66]
];

foreach ($p as $value){
    echo $value [0];
}

?>