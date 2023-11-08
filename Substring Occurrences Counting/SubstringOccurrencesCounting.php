<?php
    # Write your PHP code from here

    fscanf(STDIN, "%s %s", $mainString, $subString);
    //echo $mainString." ".$subString."\n";

    $sizeMainString = strlen($mainString);
    //echo $sizeMainString."\n";
    $sizeSubString = strlen($subString);
    //echo $sizeSubString."\n";

    $count = 0;

    for($i = 0; $i < $sizeMainString; $i++){
        //echo "Inside the loop.\n";
        if($mainString[$i] == $subString[0]){
            //echo "Inside the if statement.\n";
            if($subString == substr($mainString, $i, $sizeSubString)){
                $count++;
                //echo $count."\n";
                //$i = $i + $sizeSubString - 1;
            }    
        }    
    }
    echo $count;

?>
