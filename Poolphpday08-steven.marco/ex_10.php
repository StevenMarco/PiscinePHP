<?php
function return_calls()
{	
	static $nbr = 1;
	if($nbr % 2 === 0)
	{
        return $nbr++;
	}
	else
	{
        $nbr++;
		return NULL;
	}	
}