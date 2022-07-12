<?php
function sum_it($nbr = null, $iteration = null)
{
    if((is_int($nbr) && is_int($iteration)) && ($nbr !== NULL && $iteration !== NULL))
    {
        if($iteration > 0)
        {
            $resultat = $nbr;
            if($iteration === 1) 
            {
                if($nbr < 0) 
                {
                    return -1;
                } 
                else 
                {
                    return 1;
                }                     
            }
            else
            {   
                var_dump($iteration);
                return $resultat += sum_it($nbr, $iteration - 1); 
            }   
        }
        else
        {
            $resultat = 0;
            if($iteration === 0) 
            {
                if($nbr < 0) 
                {
                    return -1;
                } 
                else 
                {
                    return 1;
                }                     
            }
            else
            {   
                return $resultat -= sum_it($nbr, $iteration + 1); 
            }   
        }
    }
    else
    {
     return NULL;
    }
}