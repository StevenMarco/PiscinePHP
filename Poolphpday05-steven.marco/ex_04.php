<?php
    function my_print_cookie($key) { 
        if(isset($_COOKIE[$key]) == true) {
            echo $_COOKIE[$key] . "_END\n";
        }
    }