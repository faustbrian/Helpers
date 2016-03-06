<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('extract_colours')) {
    /**
     * @param $file
     * @param int    $amount
     * @param string $type
     */
    function extract_colours($file, $amount = 6, $type = 'png')
    {
        $client = app('League\ColorExtractor\Client');

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
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function intervention()
    {
        return app('image');
    }
}
