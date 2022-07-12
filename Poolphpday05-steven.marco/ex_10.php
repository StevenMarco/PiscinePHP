<?php
function my_get_weird_info() 
{
    if(isset($_GET["nbr_elem"])) 
    {
        $i = 0;
        foreach($_GET as $key => $value) {
            if($key == "nbr_elem")
            {
                echo "\$_GET" . "[\"$key\"] = $value\n";
            }
            else
            {
                echo "\$_GET" . "[\"$key\"] = \"$value\"\n";
            }
            $i++;             
            if($i == $_GET["nbr_elem"]) 
            {
                return 0;
                break;
            }
        }
    }
    else
    {
        return null;
    }
}