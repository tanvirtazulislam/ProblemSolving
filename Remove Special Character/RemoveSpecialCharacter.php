<?php
    # Write your PHP code from here

    // characters fall in a range of 65 to 122 in ASCII value.
    // any character outside of this range will be a special character

    $input = trim(fgets(STDIN));
    // echo $input;

    $string = "";
    for($i = 0; $i < strlen($input); $i++){
        $value = ord($input[$i]);
        if($value >= 65 && $value <= 122){
            $string .= $input[$i];
        }else{
            continue;
        }
    }
    echo $string;
    
?>
