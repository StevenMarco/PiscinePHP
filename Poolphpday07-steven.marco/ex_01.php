<?php
    function my_facto($nbr = null) {
         if(is_int($nbr) && $nbr !== NULL && $nbr > 0){
            $iterative = 1;
                for($i = 1; $i <= $nbr; $i++) {
                    $iterative *= $i;
                }
                return $iterative;
            }else{
            return NULL;
        }  
    }