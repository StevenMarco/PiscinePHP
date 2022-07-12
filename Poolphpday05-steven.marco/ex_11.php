<?php
function print_array_with_key(array $tab) 
{
    foreach($tab as $key => $value) 
    {
        echo "$value : $key\n";
    }
}