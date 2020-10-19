<?php
    function html($tag,$text){
        $result = '<'.$tag.'>'.$text.'</'.$tag.'>';
        return $result;
    }
    $list = html('li', 'List item 1').html('li', 'List item 2');
    echo html('ul', $list);
    

?>