<?php
function print_calls() {
    static $a = 1;
    echo $a;
    $a++;
}