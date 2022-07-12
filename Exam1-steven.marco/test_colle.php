<?php  // x = largeur / y = hauteur
    function colle($x, $y) {
     $result = array( 
                /*$0 =*/ array("A", "B", "A"),
                /*$1 =*/ array("B", " ", "B"),
               /* $2 =*/ array("C", "B", "C")
     );             /*x=4*/
        for($j=0; $j<$y; $j++) {

            for($i=0; $i<$x; $i++) { 
                
                if(($i==0 && $j==0)||($i==0 && $j==$y)) {
                    echo "A";
                }
                if($i==0 && ($j==$y || $y==0 )) {
                    echo "C";
                }
                elseif($i==$x &&($j==0 || $j==$y)) {
                    echo "C";
            
                }
                if($i==1 || $i<$x) {
                   echo "B"; 
                }
                elseif($i) {

                }
            }
        }
    }

print_r(colle(8, 5));




/*$array = array_fill(0, $y, array_fill(0, $x, "A"));
        print_r($array);*/
        
        
        /*for ($i = 0; $i < $y; $i++) {  forme un gros carré rempli de AAAB
            
            for($j = 0; $j < $x; $j++) {
                echo "A";
            }
            echo "B\n";
        }*/