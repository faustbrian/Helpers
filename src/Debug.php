<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('dbg')) {
    /**
     * @param $data
     */
    function dbg($data)
    {
        dump($data);

        die(1);
    }
}
