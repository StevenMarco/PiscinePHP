<?php 
    function airport($string) {
        
        for($i = 0; $i < 30; $i++) {
            $j = 0;
            $end = substr($string, $i, 30);
            $c = substr($end, 1);
                // sleep(0,5);
                $first = substr($string, 0, $j); // a modif
                $d = substr($first, 1); // a modif 
                echo $end . "\n";
          
                

                    
    }
}
   airport("Le but de notre vie est d’être heureux.");


    function a($string) {
$first = substr($string, 0, 6);
$d = substr($first, 1) . "\n";
echo $first .= "\n" . $d;
}

 a("Le but de notre vie est d’être heureux.");
