<?php
function is_similar($a, $b) {
    if($a == $b && gettype($a) == gettype($b)) {
        echo "Same type and value.\n";
    }
    elseif($a == $b) {
        echo "Same value.\n";
    }
    elseif(gettype($a) == gettype($b)) {
        echo "Same type.\n";
    }
}