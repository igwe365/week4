<?php
    function html($tag,$text,$color){

        if ($color!=''){
            $result = '<'.$tag.'class = "'.$color.'">'.$text.'</'.$tag.'>';
            return $result;
        }
        else{
            $result = '<'.$tag.'>'.$text.'</'.$tag.'>';
            return $result;
        }
        // jaminl
    } 
    echo html('p', 'Paragraph 1', 'red');
?>