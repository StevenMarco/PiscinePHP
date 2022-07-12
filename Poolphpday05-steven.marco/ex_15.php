<?php
    function convert_number(int $nbr) {
        if($nbr > 1000) {
            echo "Vive les Pangolins\n";
        }else{
            $result = chr($nbr);
            echo "$result\n";
        }
    }