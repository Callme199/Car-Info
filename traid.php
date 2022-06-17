<?php


    trait HOUSE{
        public function big(){
            echo "200M";
        }
    }

    trait FLAT{
        public function small(){
            echo "100M";
        }
    }

    class PWASAR{
        use HOUSE,FLAT;
    }

    $info = new PWASAR();
    $info->big();
    $info->small();
    


?>