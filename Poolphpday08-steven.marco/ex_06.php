<?php
function str_to_wordtab($str = null, $delim = null)
{
	if(is_string($str) && (is_string($delim) || $delim == " ") && ($str != NULL && $delim != NULL))
	{
        $explode = explode($delim, $str);
        return $explode;
	}
    else
    {
        return;
    }
}