<?php

function cesar2(string $str){
    $lower = strtolower($str);
    $split = str_split($lower);
    if (is_array($split)){
        $temp = $split;

        foreach ($temp as $key => $value){
            $value++;
            $value++;
            echo "$value";
        }
    }
    echo "\n";
}