<?php
    function rev_epur_str($string = NULL) {
       if(isset($string)) {
            $a = explode(" ", $string);
            $b = array_reverse($a);
            $c = implode(" ", $b);
            return $c;
       }else{
        return FALSE;
       }
    }