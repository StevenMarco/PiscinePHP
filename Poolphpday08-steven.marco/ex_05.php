<?php
function str_lower_epur($str = NULL)
{
    if (is_string($str) && $str != NULL)
    {
        $lastspace = trim($str);
        $del2w = preg_replace("/\s+/", " ", $lastspace);
        $min = strtolower($del2w);
        $str_de_ucwords = strrev(ucwords(strrev($min)));
        return $str_de_ucwords;
    }
    else
    {
        return NULL;
    }
}