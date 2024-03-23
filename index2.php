<?php

    //Class

    class Car{
        public $id;
        public $name;
        private $amount;

        // Method
        function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }

        public function setAmount($setAmount){
            $this->amount = $setAmount;
        }
    }

    // Object
    $myCar = new Car("Rajat" ,1);

    
    var_dump( $myCar->setAmount(40));
    // $myCar->name = "Rajat";
    // $myCar->id = 1;

    // var_dump($myCar);

    // $myCarid = $myCar->id;
    // echo $myCarid;


?>