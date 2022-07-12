<?php
    function my_cat_files(...$path) {
        $sentence = "";
        for($i = 0; $i < count($path); ++$i) {
            if(file_exists($path[$i])) {
                $open = fopen($path[$i], "r");
                $sentence .= fread($open, readfile($path[$i]));
                fclose($open);
                $sentence .= "_____\n";
            }            
        }
        return $sentence;
    }