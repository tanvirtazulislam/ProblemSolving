<?php
    # Write your PHP code from here

    function discounterPrice(int $p, int $d){
        //echo $p." ".$d."\n";
        $discountedPrice = $p - ($p*$d/100);
        return $discountedPrice;
    }

    fscanf(STDIN, "%d %d", $price, $discount);
    //echo $price." ".$discount."\n";

    printf("Price: %.2f", discounterPrice($price, $discount));
    
?>
