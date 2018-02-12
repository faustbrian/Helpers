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

if (!function_exists('dbg')) {
    function dbg($data)
    {
        dump($data);

        die(1);
    }
}

if (!function_exists('instance_of')) {
    function instance_of($class, array $types): bool
    {
        if (!is_object($class)) {
            return false;
        }

        foreach ($types as $type) {
            if ($class instanceof $type) {
                return true;
            }
        }

        return false;
    }
}
