<?php
function print_status($i) {
    if($i < 18) {
       echo  "Site interdit aux mineurs.\n";
    }
    else {
      echo "Vous pouvez entrer !\n";
    }
}