<?php
    // $arr = array('this' ,'that','what');

    //Assosiative _Array : These are indexed array.

    $favCol = array(
        'Shubham' => 'Red',
        'Rohan'=> 'Green',
        'Radha' => 'Black'
    );

    // echo $favCol['Radha'];
    // echo "<br>";
    // echo $favCol['Rohan'];

    foreach ($favCol as $key => $value) {
        echo''. $key .':'. $value ."\n";
    }

?>