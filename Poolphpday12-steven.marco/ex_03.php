<?php

function rev_epur_str($str)
{
	if(is_string($str) !== true)
	{
		return FALSE;
	}
	else
	{
        $str = trim($str);
        $reverse = explode(" ", $str);
        $reverse = array_reverse($reverse);
        $reverse = implode(" ", $reverse);
        $reverse = preg_replace('/\s+/', " ", $reverse);
        $reverse = preg_replace('/\t+/', " ", $reverse);
        return $reverse; 
	}
}