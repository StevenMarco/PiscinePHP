<?php
    function goto_is_evil() {
        $a = str_repeat("wac\n", 42);
            goto a;
            a:
        echo $a;
    }