<?php
function get_authorized_users(string $permission, array $users)
{
    $result = "";

    foreach($users as $value)
    {
        foreach($value["permissions"] as $val)
        {            
            if($val == $permission)
            {
                $result .= $value["login"];
            }
        }
    }
    echo "$result\n"; 
}