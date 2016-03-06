<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Hashids\Hashids;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Stringy\StaticStringy;

if (!function_exists('carbon')) {
    /**
     * @param null $dateTime
     *
     * @return \Carbon\Carbon
     */
    function carbon($dateTime = null)
    {
        return new Carbon\Carbon($dateTime);
    }
}

if (!function_exists('stringy')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function stringy()
    {
        return app('Stringy\StaticStringy');
    }
}

if (!function_exists('faker')) {
    /**
     * @return \Faker\Generator
     */
    function faker()
    {
        return \Faker\Factory::create();
    }
}

if (!function_exists('generate_hashid')) {
    /**
     * @param null $salt
     *
     * @return mixed
     */
    function generate_hashid($salt = null)
    {
        if (empty($salt)) {
            $salt = config('key');
        }

        $hashids = new Hashids($salt);

        $min = rand(1, 1000) * rand(1, 1000);
        $max = rand(1, 1000) * rand(1, 1000);
        $quantity = rand(1, 64);

        $numbers = unique_random_numbers_within_range($min, $max, $quantity);

        return StaticStringy::truncate(StaticStringy::shuffle($hashids->encode($numbers)), 8);
    }
}

if (!function_exists('unique_random_numbers_within_range')) {
    /**
     * @param $min
     * @param $max
     * @param $quantity
     *
     * @return array
     */
    function unique_random_numbers_within_range($min, $max, $quantity)
    {
        $numbers = range($min, $max);

        shuffle($numbers);

        return array_slice($numbers, 0, $quantity);
    }
}

if (!function_exists('load_xml_string')) {
    /**
     * @param $string
     *
     * @return SimpleXMLElement
     */
    function load_xml_string($string)
    {
        return simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA);
    }
}

if (!function_exists('length_aware_paginator')) {
    /**
     * @param $items
     * @param $perPage
     * @param null  $currentPage
     * @param array $options
     *
     * @return LengthAwarePaginator
     */
    function length_aware_paginator($items, $perPage, $currentPage = null, array $options = [])
    {
        $currentPage = $currentPage ?: LengthAwarePaginator::resolveCurrentPage();
        $startIndex = ($currentPage * $perPage) - $perPage;
        $paginatedItems = Collection::make($items)->slice($startIndex, $perPage);

        return new LengthAwarePaginator(
            $paginatedItems, $items->count(), $perPage, $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
    }
}
