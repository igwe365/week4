<?php
    function diceRoll(){
        
        for ($i=1; $i<=5; $i++){
            $random = rand (1,6);
            echo '<p>'.'You rolled a '.$random.'</p>';
        }
        
    }

    $num = diceRoll();

    echo $num;
?>