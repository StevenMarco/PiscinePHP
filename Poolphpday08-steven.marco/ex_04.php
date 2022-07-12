<?php
function clear_and_replace(string $string, string $word)
{
    $spaces = trim($string);
    $resu = preg_replace("/$word/", "Pangolin", $spaces, 2);
    return $resu;
}
echo clear_and_replace(" Salut le chat, le chien et le lapin ", "le");