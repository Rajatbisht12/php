<?php
    echo "Welcome to scope local/global vars in php";

    $a = 98; // Global Variable
    function printValue(){
        // $a = 97; // Local variable
        global $a; //Gives the global values of a
        echo "The Value of your varibale is $a";
    }
    echo $a;
    printValue();
?>