<?php

if (!function_exists('crypto')) {
    function crypto()
    {
        return app('encrypter');
    }
}

if (!function_exists('hasher')) {
    function hasher()
    {
        return app('hash');
    }
}
