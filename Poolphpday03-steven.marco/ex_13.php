<?php
function my_swap_vars(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$a = 2;
$b = 3;
my_swap_vars($a, $b);