<?php

function print_until($valeur) {
    $i = 0; 
    if ($valeur < 0) {
        echo "Boulet !\n";
        return false;
    }
    while($i <= $valeur) {
        echo "$i\n";
        $i++;
    }
    return true;
}