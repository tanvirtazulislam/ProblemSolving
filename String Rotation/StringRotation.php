?php
    # Write your PHP code from here
    fscanf(STDIN, "%s %s", $string, $rotatedString);
    //echo $string." ".$rotatedString."\n";
    
    if(stringRotation($string, $rotatedString))
        echo "True";
    else
        echo "False";


    function stringRotation($string, $rotatedString){

        $sizeString = strlen($string);
        //echo $sizeString."\n";

        $sizeRotatedString = strlen($rotatedString);
        //echo $sizeRotatedString."\n";

        $temp = '';
        
        if($sizeString != $sizeRotatedString){
            return false;
        }
        else if($string == $rotatedString)
            return true;
        else{
            for($i = 0; $i < $sizeString; $i++){
                $temp = $string[0]; 
                for($j = 1; $j < $sizeString; $j++){
                    $string[$j-1] = $string[$j];
                }
                $string[$sizeString-1] = $temp;

                if($string == $rotatedString)
                    return true;
            }
        } 
    }
?>
