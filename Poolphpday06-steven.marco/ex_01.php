<?php
    function my_generate_file(string $name) {
        return touch("$name.txt");
    }