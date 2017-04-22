<?php



if (!function_exists('fs_exists')) {
    function fs_exists($path)
    {
        return app('files')->exists($path);
    }
}

if (!function_exists('fs_get')) {
    function fs_get($path)
    {
        return app('files')->get($path);
    }
}

if (!function_exists('fs_get_require')) {
    function fs_get_require($path)
    {
        return app('files')->getRequire($path);
    }
}

if (!function_exists('fs_require_once')) {
    function fs_require_once($file)
    {
        return app('files')->requireOnce($file);
    }
}

if (!function_exists('fs_put')) {
    function fs_put($path, $contents, $lock = false)
    {
        return app('files')->put($path, $contents, $lock);
    }
}

if (!function_exists('fs_prepend')) {
    function fs_prepend($path, $data)
    {
        return app('files')->prepend($path, $data);
    }
}

if (!function_exists('fs_append')) {
    function fs_append($path, $data)
    {
        return app('files')->append($path, $data);
    }
}

if (!function_exists('fs_delete')) {
    function fs_delete($paths)
    {
        return app('files')->delete($paths);
    }
}

if (!function_exists('fs_move')) {
    function fs_move($path, $target)
    {
        return app('files')->move($path, $target);
    }
}

if (!function_exists('fs_copy')) {
    function fs_copy($path, $target)
    {
        return app('files')->copy($path, $target);
    }
}

if (!function_exists('fs_name')) {
    function fs_name($path)
    {
        return app('files')->name($path);
    }
}

if (!function_exists('fs_extension')) {
    function fs_extension($path)
    {
        return app('files')->extension($path);
    }
}

if (!function_exists('fs_type')) {
    function fs_type($path)
    {
        return app('files')->type($path);
    }
}

if (!function_exists('fs_mime_type')) {
    function fs_mime_type($path)
    {
        return app('files')->mimeType($path);
    }
}

if (!function_exists('fs_size')) {
    function fs_size($path)
    {
        return app('files')->size($path);
    }
}

if (!function_exists('fs_last_modified')) {
    function fs_last_modified($path)
    {
        return app('files')->lastModified($path);
    }
}

if (!function_exists('fs_is_directory')) {
    function fs_is_directory($directory)
    {
        return app('files')->isDirectory($directory);
    }
}

if (!function_exists('fs_is_writable')) {
    function fs_is_writable($path)
    {
        return app('files')->isWritable($path);
    }
}

if (!function_exists('fs_is_file')) {
    function fs_is_file($file)
    {
        return app('files')->isFile($file);
    }
}

if (!function_exists('fs_glob')) {
    function fs_glob($pattern, $flags = 0)
    {
        return app('files')->glob($pattern, $flags);
    }
}

if (!function_exists('fs_files')) {
    function fs_files($directory)
    {
        return app('files')->files($directory);
    }
}

if (!function_exists('fs_all_files')) {
    function fs_all_files($directory)
    {
        return app('files')->allFiles($directory);
    }
}

if (!function_exists('fs_directories')) {
    function fs_directories($directory)
    {
        return app('files')->directories($directory);
    }
}

if (!function_exists('fs_make_directory')) {
    function fs_make_directory($path, $mode = 0755, $recursive = false, $force = false)
    {
        return app('files')->makeDirectory($path, $mode, $recursive, $force);
    }
}

if (!function_exists('fs_copy_directory')) {
    function fs_copy_directory($directory, $destination, $options = null)
    {
        return app('files')->copyDirectory($directory, $destination, $options);
    }
}

if (!function_exists('fs_delete_directory')) {
    function fs_delete_directory($directory, $preserve = false)
    {
        return app('files')->deleteDirectory($directory, $preserve);
    }
}

if (!function_exists('fs_clean_directory')) {
    function fs_clean_directory($directory)
    {
        return app('files')->cleanDirectory($directory);
    }
}
