<?php
function aff_array(array $arr) 
{
    foreach($arr as $value) 
    {
       print_r("$value\n");       
    }
    return count($arr);
}