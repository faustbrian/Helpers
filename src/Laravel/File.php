<?php

if (!function_exists('cache')) {
    function cache($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('cache');
        }

        if (is_array($key)) {
            return app('cache')->put($key);
        }

        return app('cache')->get($key, $default);
    }
}

if (!function_exists('filesystem')) {
    function filesystem()
    {
        return app('files');
    }
}
