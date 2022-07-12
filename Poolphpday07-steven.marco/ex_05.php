<?php
function sum_it($nbr = null, $iteration = null)
{
    if((is_int($nbr) && is_int($iteration)) && ($nbr !== NULL && $iteration !== NULL))
    {
        $resultat = $nbr;
        if($iteration >= 0)
        {
            for($i = 0; $i < $iteration; $iteration--) 
            {
                $resultat += $iteration;
            }
        }
        else
        {
            for($i = 0; $i > $iteration; $iteration++) 
            {
                $resultat += $iteration;
            }
        }
        return $resultat; 
    }
    else
    {
     return NULL;
    }
}