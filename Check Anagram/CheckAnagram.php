<?php
    # Write your PHP code from here

    // Take two string inputs -> convert them to arrays -> sort the arrays -> check these two sorted arrays if they are similar or not.
    // If similar, they are anagrams.

    $input1 = trim(fgets(STDIN)); //1st line of input
    $input2 = trim(fgets(STDIN)); //2nd line of input
    
    $input1Array = str_split($input1); //converting string to array -> each character would be stored in each index of the array
    $input2Array = str_split($input2);

    sort($input1Array);
    sort($input2Array);

    if($input1Array == $input2Array)
        echo "YES";
    else
        echo "NO";

?>
