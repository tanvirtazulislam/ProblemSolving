<?php
    # Write your PHP code from here
    
    //$input = trim(fgets(STDIN));
    fscanf(STDIN, "%s %d", $string, $num);
    // print $string."\n".$num;
    
    $updatedString = "";
    for($i = 0; $i < strlen($string); $i++){
        $updatedString = $updatedString.chr(ord($string[$i])+$num);
        // echo $updatedString;
    }
    echo $updatedString;

    
?>
