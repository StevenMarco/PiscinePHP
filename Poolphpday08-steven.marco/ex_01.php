<?php
function which_is_longer( $str1, $str2) {
    if(is_string($str1) == true && is_string($str2) == true) {
        if(strlen($str1) > strlen($str2))
            return strlen($str1);
        elseif(strlen($str2) > strlen($str1))
            return strlen($str2);
        elseif(strlen($str1) == strlen($str2))
            return strlen($str1);
    }else{
        return -1;
    }
}