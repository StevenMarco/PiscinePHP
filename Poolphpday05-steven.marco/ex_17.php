<?php
    function check_url($token) {
        $whiteList = array("a", "b", "c", "d", "e", "f");
        if($token == $whiteList) {
            return 1;
        }else{
            return -1;
        }
    }