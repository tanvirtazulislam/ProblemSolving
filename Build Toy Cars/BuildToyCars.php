<?php
    # Write your PHP code from here
    fscanf(STDIN, "%d %d %d", $wheels, $carBodies, $figures);
    //echo $wheels." ".$carBodies." ".$figures."\n";
    
    echo min(intval($wheels/4), intval($carBodies/1), intval($figures/2));
?>
