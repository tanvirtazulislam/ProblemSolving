<?php
    # Write your PHP code from here
    $string = trim(fgets(STDIN));
    $string = explode(' ', $string);
    //print_r($string);

    $reversed_array = [];
    $size = count($string);
    //echo $size;
    
    for($i = $size-1; $i >= 0; $i--){
        array_push($reversed_array, $string[$i]);
    }

    //print_r($reversed_array);

    $string = implode(", ", $reversed_array);
    echo $string;
    
    /*
    //Another way to do it
    
    $reversed_string = "";
    for($i = $size-1; $i >= 0; $i--){
        if($i != 0)
            $reversed_string = $reversed_string.$string[$i].", ";
        else
            $reversed_string = $reversed_string.$string[$i];
    }

    echo $reversed_string;
    */
?>
