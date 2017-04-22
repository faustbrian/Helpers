<?php

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('array_to_object')) {
    function array_to_object($data)
    {
        return json_decode(json_encode($data));
    }
}

if (!function_exists('object_to_array')) {
    function object_to_array($data)
    {
        return json_decode(json_encode($data), true);
    }
}

if (!function_exists('xml_to_array')) {
    function xml_to_array($data)
    {
        return object_to_array(simplexml_load_string($data));
    }
}