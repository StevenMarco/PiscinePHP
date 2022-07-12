<?php
    function my_comb_n(int $n) {
        for($i = 0; $i < pow($n,$n);$i++) {
            echo str_repeat('0',$n-strlen($i))."$i\n";
        }
    }