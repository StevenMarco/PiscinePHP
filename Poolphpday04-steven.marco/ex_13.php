<?php
    function is_major(int $age) {
        $var = $age >= 18 ? "Majeur" : "Mineur";
        echo $var;
    }