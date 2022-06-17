<?php

class FRUIT{

    public $f = "banana";

    public function red(){
        echo "Strawbreey";
    }



}

class YELLOW extends FRUIT{
    public function small(){
    $this->red();
    }

    public function red(){
        echo "Banana";
    }
}

$big = new YELLOW();
$big->red();



?>