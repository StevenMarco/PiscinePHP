<?php
function multiples(int $nb) {
    for($i=0; $nb*$i<=200000; $i++) {
        $nb2 = $nb * $i;
        echo "$nb2\n";
    }
}