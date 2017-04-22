<?php



if (!function_exists('mailer')) {
    function mailer()
    {
        return app('mailer');
    }
}
