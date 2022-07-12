<?php
function my_count_chars(string $var,string $lettre) {
    return substr_count($var, $lettre);
}