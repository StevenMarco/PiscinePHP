<?php

function nbr($finish)
{
    for($i=2;$i<=$finish;$i++)
    {
        $nbDiv = 0;   
            for($j=1;$j<=$i;$j++)
            {
                if($i%$j==0)
                {
                    $nbDiv++;            
                }
            }
        if($nbDiv == 2)
        {
            echo $i." \n";
        }
    }
}
nbr(100);