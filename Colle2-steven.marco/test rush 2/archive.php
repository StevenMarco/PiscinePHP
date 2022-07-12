<?php
$tab = array();
$files_array = $argv;

                                                  // liste le fichier ou dossier émit //

function list_to_files($files_array) {
    global $tab;
//  global $files_array;
    $files_array = array($files_array);
        foreach($files_array as $file) {  
            if(is_dir($file)) {
//  echo "okgrrzgzergrzgzgz\n";
                $tab = scan_folder($file); 
            }
            elseif(file_exists($file)) {
                array_push($tab, $file);
            }
            else{
                echo "Une erreur c'est produite veuillez réessayer";
            }
        }
    return $tab;
}

function scan_folder($folder, &$result = array()) {
    $files = scandir($folder);

    foreach ($files as $key => $value) {
        $exit = basename($folder . DIRECTORY_SEPARATOR . $value);
// $exit = realpath($folder . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($exit)) {
                $results[] = $exit;
            }elseif($value != "." && $value != "..") {
                scan_folder($exit, $results);
                $results[] = $exit;
            }
    }
    return $results;
}

    var_dump(list_to_files('ajout2'));


                    // archive un fichier output.mytar !! le $json_archive ne marche pas il ne le prend pas -- a voir  //

function create_archive($json_archive, $archive_name = 'output.mytar') {
    $json_archive = array($json_archive);
        foreach ($json_archive as $file)
        file_put_contents($archive_name, utf8_encode(json_encode($json_archive)));  // mettre mon tableau.
    return $archive_name;
}

// create_archive('ajout');








                                            // compresse un fichier donné au format .gz //



function compressed($file_name) {

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


                                                // Créer un dossier 'ok' //


function my_generate_folder(string $name) { // créer un fichier avec touch au lieu de mkdir 
    return mkdir('ok');
}



























// function my_tar() {

//     if(empty($file_name)) {
//         echo "Le fichier ne semble pas correctement rendu ou vide ?\n";
//         exit;
//     }
// }
