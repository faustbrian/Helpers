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

if (! function_exists('bootstrap_path')) {
    function bootstrap_path($path = '')
    {
        return base_path('bootstrap').($path ? "/$path" : $path);
    }
}

if (! function_exists('database_path')) {
    function database_path($path = '')
    {
        return base_path('database').($path ? "/$path" : $path);
    }
}

if (! function_exists('database_migrations_path')) {
    function database_migrations_path($path = '')
    {
        return base_path('database/migrations').($path ? "/$path" : $path);
    }
}

if (! function_exists('database_seeds_path')) {
    function database_seeds_path($path = '')
    {
        return base_path('database/seeds').($path ? "/$path" : $path);
    }
}

if (! function_exists('resources_path')) {
    function resources_path($path = '')
    {
        return base_path('resources').($path ? "/$path" : $path);
    }
}

if (! function_exists('resources_assets_path')) {
    function resources_assets_path($path = '')
    {
        return base_path('resources/assets').($path ? "/$path" : $path);
    }
}

if (! function_exists('resources_language_path')) {
    function resources_language_path($path = '')
    {
        return base_path('resources/lang').($path ? "/$path" : $path);
    }
}

if (! function_exists('resources_views_path')) {
    function resources_views_path($path = '')
    {
        return base_path('resources/views').($path ? "/$path" : $path);
    }
}

if (! function_exists('app_storage_path')) {
    function app_storage_path($path = '')
    {
        return storage_path('app').($path ? "/$path" : $path);
    }
}

if (! function_exists('framework_storage_path')) {
    function framework_storage_path($path = '')
    {
        return storage_path('framework').($path ? "/$path" : $path);
    }
}

if (! function_exists('framework_cache_path')) {
    function framework_cache_path($path = '')
    {
        return storage_path('framework/cache').($path ? "/$path" : $path);
    }
}

if (! function_exists('framework_sessions_path')) {
    function framework_sessions_path($path = '')
    {
        return storage_path('framework/sessions').($path ? "/$path" : $path);
    }
}

if (! function_exists('framework_views_path')) {
    function framework_views_path($path = '')
    {
        return storage_path('framework/views').($path ? "/$path" : $path);
    }
}

if (! function_exists('logs_path')) {
    function logs_path($path = '')
    {
        return storage_path('logs').($path ? "/$path" : $path);
    }
}
