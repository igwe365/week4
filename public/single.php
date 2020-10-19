<?php
    function text(){
        $jack = '<p>'.'all work and no play makes jack a dull boy'.'</p>'.
                '<p>'.'all work and no play makes jack a dull boy'.'</p>'.
                '<p>'.'all work and no play makes jack a dull boy'.'</p>'.
                '<p>'.'all work and no play makes jack a dull boy'.'</p>'. 
                '<p>'.'all work and no play makes jack a dull boy'.'</p>';
        return $jack;
    }
    $repeat = text().text().text().text().text().text().text().text().text().text().text().text().text().text().text().text().text().text().text().text();
    $repeat2 = $repeat.$repeat;
    echo $repeat2;
?>