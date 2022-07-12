<?php
function mixed_pow_rec($nbr = null, $power = null) {
        if((is_int($nbr) && (is_int($power) && $power >= 0)) && ($nbr !== NULL && $power !== NULL))
        {          
                if($power === 0) 
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
                        return $nbr * mixed_pow_rec($nbr, $power - 1); 
                }               
        }else
        {
                return NULL;
        }    
}