<?php
    function my_facto_rec($nbr = null) {
    if(is_int($nbr) && $nbr !== NULL && $nbr >= 0){
        if($nbr === 0) {
            return 1;
        }else
            return $nbr * my_facto_rec($nbr - 1);
   }else
        return NULL;
}