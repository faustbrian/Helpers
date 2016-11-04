<?php

if (!function_exists('dbg')) {
    function dbg($data)
    {
        dump($data);

        die(1);
    }
}
