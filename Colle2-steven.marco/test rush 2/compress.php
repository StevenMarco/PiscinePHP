<?php


function compressed( $file_name = './text.txt') {

    if(isset($file_name)) {      // ouvrir fichier à compresser et le lire

      $fo = fopen($file_name, "rb");
      $size1 = filesize($file_name);
      $read = fread($fo, $size1);
      fclose($fo);
      
      $gzdata = gzencode($read, 9);     // compresser le fichier
      
      $fo = fopen($file_name.'.gz', 'wb'); 
            fwrite($fo, $gzdata);       // écrit le contenu du fichier dans le fichier compressé 
            fclose($fo);
    } else {
      echo "$file_name n'a pas pu être ouvert et compréssé correctement";
    }
}