<?php

function is_prime($nbr)
{
    for ($i = 2; $i < $nbr; $i++) 
    {
        if ($nbr % $i == 0) 
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}