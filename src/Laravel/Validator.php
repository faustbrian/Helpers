<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('validator')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function validator()
    {
        return app('validator');
    }
}

if (!function_exists('validate')) {
    /**
     * Validate some data.
     *
     * @param string|array $fields
     * @param string|array $rules
     *
     * @return bool
     */
    function validate($fields, $rules)
    {
        if (!is_array($fields)) {
            $fields = ['default' => $fields];
        }
    
        if (!is_array($rules)) {
            $rules = ['default' => $rules];
        }
    
        return \Validator::make($fields, $rules)->passes();
    }
}
