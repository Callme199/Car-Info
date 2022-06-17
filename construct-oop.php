<?php


class BankAccount{
    
    private $number;
    private $balance;


    public function __construct($acc_number, $total_balance){
        $this->number = $acc_number;
        $this->balance = $total_balance;
        echo "Call Me 199"; 
    }

    public function __destruct(){
        echo "Call Call Call";
    }

}


$new_account = new BankAccount(1134768, 20000000000);

echo "<pre>";
print_r($new_account);


?>