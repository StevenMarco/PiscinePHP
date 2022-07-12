<?php
function get_angry_bird(int $value) 
{
    $piou = "";
    for ($i = 0; $i < $value; $i++) 
    {
        $piou .= "piou";
    }
    return "$piou\n";
}