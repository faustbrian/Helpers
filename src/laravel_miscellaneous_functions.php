<?php



if (!function_exists('urls')) {
    function urls()
    {
        return app('Illuminate\Routing\UrlGenerator');
    }
}

if (!function_exists('translator')) {
    function translator()
    {
        return app('translator');
    }
}

if (!function_exists('message_bag')) {
    function message_bag($messages)
    {
        return new Illuminate\Support\MessageBag($messages);
    }
}
