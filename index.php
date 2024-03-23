<?php
    $integer = 2;
    $string = "hello world";
    $myfloat = 5.99;
    $myBool =  true;
    $myArray = [1, 2, 3, 4, 5, 6];

    $myAssociatedArray = [
        "keyOne" => 1,
        "keyTwo" => 3,];
    // var_dump($myArray);
    // echo $string;

    // Function

    // function myFunction($message, $number){
    //     echo $message ."\n". $number;
    // }
    // myFunction("hello", 45);

    // for($i = 0; $i < count($myArray); $i++){
    //     echo $myArray[$i] .",";
    // }
    
    // For each loop
    foreach ($myAssociatedArray as $key => $value) {
        // echo $key ." ". $value ." ";
        echo $myAssociatedArray[$key];
    }

?>