<?php

function test() {
    $archive_file = 'text.txt';
 $folder_to_compress = './';
 $archive = new PharData($archive_file); // return mkdir('ok') et l'archive;
$archive->buildFromDirectory($folder_to_compress); // déplacer le fichier 
 $archive->compress(Phar::GZ); // compresser voir modif avec fopen. 
 unlink($archive_file);
}


function compressed() {
    $file_name = './text.txt';

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

 // compressed();








 
function my_generate_folder(string $name) { // créer un fichier 
    return mkdir('ok');
}


//$files_array = argvg();
