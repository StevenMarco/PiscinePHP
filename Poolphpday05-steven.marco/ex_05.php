<?php
    function my_add_to_session($pseudo, $name) {
        $_SESSION[$pseudo] = $name . "titi"; 
    }