<?php
function return_calls()
{
    static $function = 1;
    $result = $function * 3;
    $function++;
    return $result; 
}