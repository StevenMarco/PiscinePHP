<?php
    function my_aff_global() {
        foreach($GLOBALS as $key => $value) {
            if(is_string($value) == true) {
                echo "$key => $value\n";
            }
        }
    }