<?php
function get_array_key(array $arr, mixed $value)
{
    foreach($arr as $key => $val)
    {
        if($val == $value)
        {
            return $key;
        }
    }
}