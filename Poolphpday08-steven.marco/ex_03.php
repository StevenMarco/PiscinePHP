<?php
    function my_mail(string $mail)
    {
        if(is_string($mail))
            echo $result = substr(strstr(strrev(strstr(strrev($mail), ".")), "@"), 1, -1) . "\n";
        else
            return;
    }