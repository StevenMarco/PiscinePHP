<?php
function count_rec_str($array, $string)
{
    foreach($array as $key => $value)
    {            
        if(is_array($value))
        {
            echo $key + 1;
            count_rec_str($value, $string);
        }
        //    echo $result = substr_count(implode(",", $array), $string);
    } 
}

count_rec_str(array(array("zrez", "yo", array("zrez", "yo"), array("zrez", "yo"))), "yo");

// return array();