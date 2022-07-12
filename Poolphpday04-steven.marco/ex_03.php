<?php
function print_age(int $i) {
    if($i <= 0) {
        echo "Enfantillage...\n";
    }
    elseif($i === 42) {
        echo "the answer.\n";
    }
    else {
        echo "je peux aller en boite\n";
    }
}