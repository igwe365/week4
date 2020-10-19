<?php
    function hello($num){
        if ($num === 3){
            for ($i=1; $i<=3; $i++){
                echo '<p> Hello World</p>';
            }
        }
        else{
            echo '<p> nothing here buddy</p>';
        }
    }

    hello(3);
?>