<?php
function rotone(string $var) {
    $abc = "abcdefghijklmnopqrstuvwxyz";
    $calcul = strlen($var);
     
     for ($i = 0; $i < $calcul; $i++) {
       $var2 = strpos($var[$i--], $abc[$i]);
       $var[$i++] = $abc[$i];
    }
    echo $var;
}