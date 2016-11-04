<?php

if (!function_exists('guzzle')) {
    function guzzle(array $config = [])
    {
        return new GuzzleHttp\Client($config);
    }
}
