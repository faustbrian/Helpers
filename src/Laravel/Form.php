<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('form')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function form()
    {
        return app('form');
    }
}

if (!function_exists('open')) {
    /**
     * @param array $options
     *
     * @return mixed
     */
    function open(array $options = [])
    {
        return app('form')->open($options);
    }
}

if (!function_exists('model')) {
    /**
     * @param $model
     * @param array $options
     *
     * @return mixed
     */
    function model($model, array $options = [])
    {
        return app('form')->model($model, $options);
    }
}

if (!function_exists('close')) {
    /**
     * @return mixed
     */
    function close()
    {
        return app('form')->close();
    }
}

if (!function_exists('token')) {
    /**
     * @return mixed
     */
    function token()
    {
        return app('form')->token();
    }
}

if (!function_exists('label')) {
    /**
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function label($name, $value = null, $options = [])
    {
        return app('form')->label($name, $value, $options);
    }
}

if (!function_exists('input')) {
    /**
     * @param $type
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function input($type, $name, $value = null, $options = [])
    {
        return app('form')->input($type, $name, $value, $options);
    }
}

if (!function_exists('text')) {
    /**
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function text($name, $value = null, $options = [])
    {
        return app('form')->text($name, $value, $options);
    }
}

if (!function_exists('password')) {
    /**
     * @param $name
     * @param array $options
     *
     * @return mixed
     */
    function password($name, $options = [])
    {
        return app('form')->password($name, $options);
    }
}

if (!function_exists('hidden')) {
    /**
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function hidden($name, $value = null, $options = [])
    {
        return app('form')->hidden($name, $value, $options);
    }
}

if (!function_exists('email')) {
    /**
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function email($name, $value = null, $options = [])
    {
        return app('form')->email($name, $value, $options);
    }
}

if (!function_exists('file_input')) {
    /**
     * @param $name
     * @param array $options
     *
     * @return mixed
     */
    function file_input($name, $options = [])
    {
        return app('form')->file($name, $options);
    }
}

if (!function_exists('textarea')) {
    /**
     * @param $name
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function textarea($name, $value = null, $options = [])
    {
        return app('form')->textarea($name, $value, $options);
    }
}

if (!function_exists('select')) {
    /**
     * @param $name
     * @param array $list
     * @param null  $selected
     * @param array $options
     *
     * @return mixed
     */
    function select($name, $list = [], $selected = null, $options = [])
    {
        return app('form')->select($name, $list, $selected, $options);
    }
}

if (!function_exists('select_range')) {
    /**
     * @param $name
     * @param $begin
     * @param $end
     * @param null  $selected
     * @param array $options
     *
     * @return mixed
     */
    function select_range($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectRange($name, $begin, $end, $selected, $options);
    }
}

if (!function_exists('select_year')) {
    /**
     * @param $name
     * @param $begin
     * @param $end
     * @param null  $selected
     * @param array $options
     *
     * @return mixed
     */
    function select_year($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectYear($name, $begin, $end, $selected, $options);
    }
}

if (!function_exists('select_month')) {
    /**
     * @param $name
     * @param null   $selected
     * @param array  $options
     * @param string $format
     *
     * @return mixed
     */
    function select_month($name, $selected = null, $options = [], $format = '%B')
    {
        return app('form')->selectMonth($name, $selected, $options, $format);
    }
}

if (!function_exists('get_select_option')) {
    /**
     * @param $display
     * @param $value
     * @param $selected
     *
     * @return mixed
     */
    function get_select_option($display, $value, $selected)
    {
        return app('form')->getSelectOption($display, $value, $selected);
    }
}

if (!function_exists('checkbox')) {
    /**
     * @param $name
     * @param int   $value
     * @param null  $checked
     * @param array $options
     *
     * @return mixed
     */
    function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        return app('form')->checkbox($name, $value, $checked, $options);
    }
}

if (!function_exists('radio')) {
    /**
     * @param $name
     * @param null  $value
     * @param null  $checked
     * @param array $options
     *
     * @return mixed
     */
    function radio($name, $value = null, $checked = null, $options = [])
    {
        return app('form')->radio($name, $value, $checked, $options);
    }
}

if (!function_exists('reset_button')) {
    /**
     * @param $url
     * @param $name
     * @param array $attributes
     *
     * @return mixed
     */
    function reset_button($url, $name, $attributes = [])
    {
        return app('form')->reset($url, $name, $attributes);
    }
}

if (!function_exists('image_input')) {
    /**
     * @param $url
     * @param $name
     * @param array $attributes
     *
     * @return mixed
     */
    function image_input($url, $name, $attributes = [])
    {
        return app('form')->image($url, $name, $attributes);
    }
}

if (!function_exists('submit')) {
    /**
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function submit($value = null, $options = [])
    {
        return app('form')->submit($value, $options);
    }
}

if (!function_exists('button')) {
    /**
     * @param null  $value
     * @param array $options
     *
     * @return mixed
     */
    function button($value = null, $options = [])
    {
        return app('form')->button($name, $options);
    }
}

if (!function_exists('get_id_attribute')) {
    /**
     * @param $name
     * @param $attributes
     *
     * @return mixed
     */
    function get_id_attribute($name, $attributes)
    {
        return app('form')->getIdAttribute($name, $attributes);
    }
}

if (!function_exists('get_value_attribute')) {
    /**
     * @param $name
     * @param null $value
     *
     * @return mixed
     */
    function get_value_attribute($name, $value = null)
    {
        return app('form')->getValueAttribute($name, $value);
    }
}

if (!function_exists('old_input_is_empty')) {
    /**
     * @return mixed
     */
    function old_input_is_empty()
    {
        return app('form')->oldInputIsEmpty();
    }
}
