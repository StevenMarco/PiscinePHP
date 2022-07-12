<?php
function calc(string $i,int $nb1,int $nb2) {

switch ($i) {
    case "+" :
        $nb3 = $nb1 + $nb2;
        return $nb3;
        break;
    case "*":
        $nb4 = $nb1 * $nb2;
        return $nb4;
        break;
    case "/":
        $nb5 = $nb1 / $nb2;
        return $nb5;
        break;
    case "%":
        $nb6 = $nb1 % $nb2;
        return $nb6;
        break;
    case "-":
        $nb7 = $nb1 - $nb2;
        return $nb7;
        break;
    }
}