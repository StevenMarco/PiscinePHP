<?php
function str_to_wordtab($str = null, $delim = null)
{
    if(is_string($str) && ($delim == " " || is_string($delim)) && ($str !== NULL && $delim !== NULL))
    {
        $result = explode($delim, $str);
        return $result;
    }
    else
    {
        return NULL;
    }
}