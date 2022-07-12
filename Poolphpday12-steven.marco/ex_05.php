<?php
function my_sort(array $array)
{
    static $call = 0;

    $first = array_shift($array);
    $last = array_pop($array);
    array_push($array, $first);
    array_unshift($array, $last);

    $call++;

    echo $call . "\n";
    print_r($array);
}