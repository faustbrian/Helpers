<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Rhumsaa\Uuid\Uuid;

if (!function_exists('uuid1')) {
    /**
     * @return mixed
     */
    function uuid1()
    {
        $uuid = Uuid::uuid1();

        return $uuid->toString();
    }
}

if (!function_exists('uuid3')) {
    /**
     * @param $ns
     * @param $name
     *
     * @return mixed
     */
    function uuid3($ns, $name)
    {
        $uuid = Uuid::uuid3($ns, $name);

        return $uuid->toString();
    }
}

if (!function_exists('uuid4')) {
    /**
     * @return mixed
     */
    function uuid4()
    {
        $uuid = Uuid::uuid4();

        return $uuid->toString();
    }
}

if (!function_exists('uuid5')) {
    /**
     * @param $ns
     * @param $name
     *
     * @return mixed
     */
    function uuid5($ns, $name)
    {
        $uuid = Uuid::uuid5($ns, $name);

        return $uuid->toString();
    }
}
