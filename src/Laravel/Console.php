<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('artisan')) {
    /**
     * @param null  $command
     * @param array $parameters
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
    function artisan($command = null, array $parameters = [])
    {
        $artisan = app('Illuminate\Contracts\Console\Kernel');

        if (!empty($command)) {
            return $artisan->call($command, $parameters);
        }

        return $artisan;
    }
}
