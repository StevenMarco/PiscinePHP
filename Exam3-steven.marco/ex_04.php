<?php
function ord_alphlong($string)
{
   $tab = explode(" ", $string);
        asort($tab, SORT_STRING);
   foreach($tab as $key => $value)
   {
       echo $value . "\n";
   }
  // echo strlen($tab[1]);
}

ord_alphlong("je suis amoureux");

// explode Scinde une chaîne de caractères en segments