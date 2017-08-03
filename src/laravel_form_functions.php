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

if (! function_exists('form')) {
    function form()
    {
        return app('form');
    }
}

if (! function_exists('open')) {
    function open(array $options = [])
    {
        return app('form')->open($options);
    }
}

if (! function_exists('model')) {
    function model($model, array $options = [])
    {
        return app('form')->model($model, $options);
    }
}

if (! function_exists('close')) {
    function close()
    {
        return app('form')->close();
    }
}

if (! function_exists('token')) {
    function token()
    {
        return app('form')->token();
    }
}

if (! function_exists('label')) {
    function label($name, $value = null, $options = [])
    {
        return app('form')->label($name, $value, $options);
    }
}

if (! function_exists('input')) {
    function input($type, $name, $value = null, $options = [])
    {
        return app('form')->input($type, $name, $value, $options);
    }
}

if (! function_exists('text')) {
    function text($name, $value = null, $options = [])
    {
        return app('form')->text($name, $value, $options);
    }
}

if (! function_exists('password')) {
    function password($name, $options = [])
    {
        return app('form')->password($name, $options);
    }
}

if (! function_exists('hidden')) {
    function hidden($name, $value = null, $options = [])
    {
        return app('form')->hidden($name, $value, $options);
    }
}

if (! function_exists('email')) {
    function email($name, $value = null, $options = [])
    {
        return app('form')->email($name, $value, $options);
    }
}

if (! function_exists('file_input')) {
    function file_input($name, $options = [])
    {
        return app('form')->file($name, $options);
    }
}

if (! function_exists('textarea')) {
    function textarea($name, $value = null, $options = [])
    {
        return app('form')->textarea($name, $value, $options);
    }
}

if (! function_exists('select')) {
    function select($name, $list = [], $selected = null, $options = [])
    {
        return app('form')->select($name, $list, $selected, $options);
    }
}

if (! function_exists('select_range')) {
    function select_range($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectRange($name, $begin, $end, $selected, $options);
    }
}

if (! function_exists('select_year')) {
    function select_year($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectYear($name, $begin, $end, $selected, $options);
    }
}

if (! function_exists('select_month')) {
    function select_month($name, $selected = null, $options = [], $format = '%B')
    {
        return app('form')->selectMonth($name, $selected, $options, $format);
    }
}

if (! function_exists('get_select_option')) {
    function get_select_option($display, $value, $selected)
    {
        return app('form')->getSelectOption($display, $value, $selected);
    }
}

if (! function_exists('checkbox')) {
    function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        return app('form')->checkbox($name, $value, $checked, $options);
    }
}

if (! function_exists('radio')) {
    function radio($name, $value = null, $checked = null, $options = [])
    {
        return app('form')->radio($name, $value, $checked, $options);
    }
}

if (! function_exists('reset_button')) {
    function reset_button($url, $name, $attributes = [])
    {
        return app('form')->reset($url, $name, $attributes);
    }
}

if (! function_exists('image_input')) {
    function image_input($url, $name, $attributes = [])
    {
        return app('form')->image($url, $name, $attributes);
    }
}

if (! function_exists('submit')) {
    function submit($value = null, $options = [])
    {
        return app('form')->submit($value, $options);
    }
}

if (! function_exists('button')) {
    function button($value = null, $options = [])
    {
        return app('form')->button($name, $options);
    }
}

if (! function_exists('get_id_attribute')) {
    function get_id_attribute($name, $attributes)
    {
        return app('form')->getIdAttribute($name, $attributes);
    }
}

if (! function_exists('get_value_attribute')) {
    function get_value_attribute($name, $value = null)
    {
        return app('form')->getValueAttribute($name, $value);
    }
}

if (! function_exists('old_input_is_empty')) {
    function old_input_is_empty()
    {
        return app('form')->oldInputIsEmpty();
    }
}
