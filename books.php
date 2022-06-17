<?php


class Books {

    public $title;
    public $price;

    function set_price($par){
        $this->price = $par;
    }

    function get_price(){
        echo $this->price. "<br>";
    }

    function set_title($par){
        $this->title = $par;
    }

    function get_title(){
        echo $this->title. "<br>";
    }

}

$Php = new Books();
$Java = new Books();
$C_Plus = new Books();

$Php->set_price("100000MMK");
$Java->set_price("150000MMK");
$C_Plus->set_price("200000MMK");

$Php->set_title("Basic");
$Java->set_title("Basic to Advance");
$C_Plus->set_title("Zero to Hero");


$Php->get_price();
$Java->get_price();
$C_Plus->get_price();

$Php->get_title();
$Java->get_title();
$C_Plus->get_title();

   





?>