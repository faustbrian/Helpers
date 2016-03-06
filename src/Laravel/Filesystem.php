<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('fs_exists')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_exists($path)
    {
        return app('files')->exists($path);
    }
}

if (!function_exists('fs_get')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_get($path)
    {
        return app('files')->get($path);
    }
}

if (!function_exists('fs_get_require')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_get_require($path)
    {
        return app('files')->getRequire($path);
    }
}

if (!function_exists('fs_require_once')) {
    /**
     * @param $file
     *
     * @return mixed
     */
    function fs_require_once($file)
    {
        return app('files')->requireOnce($file);
    }
}

if (!function_exists('fs_put')) {
    /**
     * @param $path
     * @param $contents
     * @param bool $lock
     *
     * @return mixed
     */
    function fs_put($path, $contents, $lock = false)
    {
        return app('files')->put($path, $contents, $lock);
    }
}

if (!function_exists('fs_prepend')) {
    /**
     * @param $path
     * @param $data
     *
     * @return mixed
     */
    function fs_prepend($path, $data)
    {
        return app('files')->prepend($path, $data);
    }
}

if (!function_exists('fs_append')) {
    /**
     * @param $path
     * @param $data
     *
     * @return mixed
     */
    function fs_append($path, $data)
    {
        return app('files')->append($path, $data);
    }
}

if (!function_exists('fs_delete')) {
    /**
     * @param $paths
     *
     * @return mixed
     */
    function fs_delete($paths)
    {
        return app('files')->delete($paths);
    }
}

if (!function_exists('fs_move')) {
    /**
     * @param $path
     * @param $target
     *
     * @return mixed
     */
    function fs_move($path, $target)
    {
        return app('files')->move($path, $target);
    }
}

if (!function_exists('fs_copy')) {
    /**
     * @param $path
     * @param $target
     *
     * @return mixed
     */
    function fs_copy($path, $target)
    {
        return app('files')->copy($path, $target);
    }
}

if (!function_exists('fs_name')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_name($path)
    {
        return app('files')->name($path);
    }
}

if (!function_exists('fs_extension')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_extension($path)
    {
        return app('files')->extension($path);
    }
}

if (!function_exists('fs_type')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_type($path)
    {
        return app('files')->type($path);
    }
}

if (!function_exists('fs_mime_type')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_mime_type($path)
    {
        return app('files')->mimeType($path);
    }
}

if (!function_exists('fs_size')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_size($path)
    {
        return app('files')->size($path);
    }
}

if (!function_exists('fs_last_modified')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_last_modified($path)
    {
        return app('files')->lastModified($path);
    }
}

if (!function_exists('fs_is_directory')) {
    /**
     * @param $directory
     *
     * @return mixed
     */
    function fs_is_directory($directory)
    {
        return app('files')->isDirectory($directory);
    }
}

if (!function_exists('fs_is_writable')) {
    /**
     * @param $path
     *
     * @return mixed
     */
    function fs_is_writable($path)
    {
        return app('files')->isWritable($path);
    }
}

if (!function_exists('fs_is_file')) {
    /**
     * @param $file
     *
     * @return mixed
     */
    function fs_is_file($file)
    {
        return app('files')->isFile($file);
    }
}

if (!function_exists('fs_glob')) {
    /**
     * @param $pattern
     * @param int $flags
     *
     * @return mixed
     */
    function fs_glob($pattern, $flags = 0)
    {
        return app('files')->glob($pattern, $flags);
    }
}

if (!function_exists('fs_files')) {
    /**
     * @param $directory
     *
     * @return mixed
     */
    function fs_files($directory)
    {
        return app('files')->files($directory);
    }
}

if (!function_exists('fs_all_files')) {
    /**
     * @param $directory
     *
     * @return mixed
     */
    function fs_all_files($directory)
    {
        return app('files')->allFiles($directory);
    }
}

if (!function_exists('fs_directories')) {
    /**
     * @param $directory
     *
     * @return mixed
     */
    function fs_directories($directory)
    {
        return app('files')->directories($directory);
    }
}

if (!function_exists('fs_make_directory')) {
    /**
     * @param $path
     * @param int  $mode
     * @param bool $recursive
     * @param bool $force
     *
     * @return mixed
     */
    function fs_make_directory($path, $mode = 0755, $recursive = false, $force = false)
    {
        return app('files')->makeDirectory($path, $mode, $recursive, $force);
    }
}

if (!function_exists('fs_copy_directory')) {
    /**
     * @param $directory
     * @param $destination
     * @param null $options
     *
     * @return mixed
     */
    function fs_copy_directory($directory, $destination, $options = null)
    {
        return app('files')->copyDirectory($directory, $destination, $options);
    }
}

if (!function_exists('fs_delete_directory')) {
    /**
     * @param $directory
     * @param bool $preserve
     *
     * @return mixed
     */
    function fs_delete_directory($directory, $preserve = false)
    {
        return app('files')->deleteDirectory($directory, $preserve);
    }
}

if (!function_exists('fs_clean_directory')) {
    /**
     * @param $directory
     *
     * @return mixed
     */
    function fs_clean_directory($directory)
    {
        return app('files')->cleanDirectory($directory);
    }
}
