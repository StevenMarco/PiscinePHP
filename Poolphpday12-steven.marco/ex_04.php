<?php
function resum_join_str($str, $string)
{

    if(isset($str) == false || isset($string) == false)
    {
        return false;
    }
    else
    {
            // str
        if(strlen($str) < 12)
        {
            for($i = strlen($str); $i < 12; $i++)
            {
                $str .= ".";
            }
            return $str;
        }
        else
        {
            return $str = substr($str, 0, 12);
        }

            // string
        if(strlen($string) < 8)
        {
            for($i = strlen($string); $i < 8; $i++)
            {
                $string .= ".";
            }
            return $string;
        }
        else
        {
            return $string = substr($string, -12);
        } 
    }
}