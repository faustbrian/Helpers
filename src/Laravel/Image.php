<?php

if (!function_exists('extract_colours')) {
    function extract_colours($file, $amount = 6, $type = 'png')
    {
        $client = app('BrianFaust\ColorExtractor\Client');

        switch ($type) {
            case 'png':
                $image = $client->loadPng($file);
            break;

            case 'jpeg':
                $image = $client->loadJpeg($file);
            break;

            default:
                return;
            break;
        }

        return $image->extract($amount);
    }
}

if (!function_exists('intervention')) {
    function intervention()
    {
        return app('image');
    }
}
