<?php
    # Write your PHP code from here
    function check(int $a, int $b){
        //echo $a;
        //echo $b;
        if($a === 10 || $b === 10 || $a+$b === 10){
            return true;
        }
        return false;
    }


    fscanf(STDIN, "%d %d", $a, $b);
    //echo $a." ".$b;

    if(check($a, $b))
        echo "True";
    else 
        echo "False";
   
?>
