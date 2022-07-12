<?php
function print_array_with_key($array) {
    foreach($array as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
}