<?php
    function get_execution_time() {
    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    return round($time, 7);   
    }