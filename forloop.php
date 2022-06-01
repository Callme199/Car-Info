<?php
    $age = 5;
    for($i = 0; $i < $age; $i++) {

        for($k = 1; $k <= $i; $k++) {
            echo "&nbsp;&nbsp;";
        }
        
        for($j = 0; $j < $age - $i; $j++) {
            echo "*";
        }
        
        
        echo "<br>";
    }
?>