<?php

    $string = trim(fgets(STDIN));

    //$output = array();
    $output = [];

    $size = strlen($string);

    for($i=0; $i<$size; $i++){
        if(in_array($string[$i], $output) == false){
            array_push($output, $string[$i]);
            //$output[$i] = $string[$i];
        }
    }
    
    //print_r($output);
    echo join($output);


?>
