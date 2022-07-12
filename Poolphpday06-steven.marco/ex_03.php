<?php
    function write_into_my_file(string $str, string $file, bool $append = false) {
        $write = $str;
        if($append == false) {
            $fich = fopen($file, "w"); // 0
            fwrite($fich, $write);
            return fclose($fich);
        }else{
            $fich2 = fopen($file, "a");
            fwrite($fich2, "\n$write");
            return fclose($fich2);
        }
       // à vérifier le return true et false;   
    }