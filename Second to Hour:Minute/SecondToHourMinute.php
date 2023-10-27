
<?php
    # Write your PHP code from here

    fscanf(STDIN, "%d", $seconds);
    //echo $seconds."\n";

    $hours = 0;
    $minutes = 0;

    $minutes = intval($seconds/60);
    //echo $minutes."\n";
    //echo var_dump($minutes);

    if($minutes >= 60){
        $hours = intval($minutes/60);
        $minutes = $minutes%60;
    }

    echo $hours.":".$minutes;

?>
