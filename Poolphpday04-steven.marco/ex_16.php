<?php
function print_double_array(array $my_array) 
{
   foreach($my_array as $value) 
   {
      foreach($value as $val)
      {
         print_r("$val\n");
      }
   } 
}