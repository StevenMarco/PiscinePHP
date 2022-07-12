<?php
    function resum_join_str($str1, $str2) {
        if(((isset($str1) == FALSE) || (isset($str2) == FALSE)) || (empty($str1) || empty($str2))) {
            return false;
        }
        if(strlen($str1) < 14 || strlen($str2) < 3) {
            for($i = strlen($str1); $i < 14; $i++) {
                $str1 .= ".";
            }
            for($j = strlen($str2); $j < 3; $j++) {
                $str2 .= ".";
            }
        }
        if(is_string($str1) && is_string($str2)) {
            $cut1 = substr($str1, 0, 14);
            $cut2 = substr($str2, -3);
            return "$cut1" . "$cut2";
        }
    }
  echo resum_join_str("azertyuiopmlkjhgfdsq", "mm");