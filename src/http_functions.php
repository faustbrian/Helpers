<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('guzzle')) {
    function guzzle(array $config = [])
    {
        return new GuzzleHttp\Client($config);
    }
}
