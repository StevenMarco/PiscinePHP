<?php
    function helix_post_finder() {
        if(isset($_POST["phelix"]) == true) {
            $result = $_POST["phelix"];
            return $result;
        }else {
            return NULL;
        }
    }