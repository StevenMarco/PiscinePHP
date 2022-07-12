<?php
    function my_add_to_cookie($pseudo, $name) {
        setcookie($pseudo, $name . "toto");      
    }
