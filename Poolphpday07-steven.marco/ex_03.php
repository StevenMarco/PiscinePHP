<?php
    function my_pow($nb_a = null, $nb_b = null) 
    {
        if((is_int($nb_a) && (is_int($nb_b) && $nb_b >= 0)) && ($nb_a !== NULL && $nb_b !== NULL)) 
        {
            $resultat = 1;
            for($i = 0; $i < $nb_b; $i++) 
            {
                $resultat *= $nb_a;
            }
                if($nb_a < 0) 
                    $resultat *= -1; 
            return $resultat; 
        }else
        {
            return NULL;
        }        
    }