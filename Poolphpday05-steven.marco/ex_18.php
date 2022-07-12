<?php
function check_user_acl(array $user, string $permission)
{
    foreach($user["permissions"] as $value)
    {
        if($value == $permission)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}