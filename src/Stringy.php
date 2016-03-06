<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Stringy\Stringy;

if (!function_exists('stringy_chars')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_chars($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->chars();
    }
}

if (!function_exists('stringy_upper_case_first')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_upper_case_first($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->upperCaseFirst();
    }
}

if (!function_exists('stringy_lower_case_first')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_lower_case_first($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->lowerCaseFirst();
    }
}

if (!function_exists('stringy_camelize')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_camelize($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->camelize();
    }
}

if (!function_exists('stringy_upper_camelize')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_upper_camelize($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->upperCamelize();
    }
}

if (!function_exists('stringy_dasherize')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_dasherize($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->dasherize();
    }
}

if (!function_exists('stringy_underscored')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_underscored($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->underscored();
    }
}

if (!function_exists('stringy_delimit')) {
    /**
     * @param $str
     * @param $delimiter
     * @param null $encoding
     *
     * @return string
     */
    function stringy_delimit($str, $delimiter, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->delimit($delimiter);
    }
}

if (!function_exists('stringy_swap_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_swap_case($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->swapCase();
    }
}

if (!function_exists('stringy_titleize')) {
    /**
     * @param $str
     * @param null $ignore
     * @param null $encoding
     *
     * @return string
     */
    function stringy_titleize($str, $ignore = null, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->titleize($ignore);
    }
}

if (!function_exists('stringy_humanize')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_humanize($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->humanize();
    }
}

if (!function_exists('stringy_tidy')) {
    /**
     * @param $str
     *
     * @return string
     */
    function stringy_tidy($str)
    {
        return (string) Stringy::create($str)->tidy();
    }
}

if (!function_exists('stringy_collapse_whitespace')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_collapse_whitespace($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->collapseWhitespace();
    }
}

if (!function_exists('stringy_to_ascii')) {
    /**
     * @param $str
     * @param bool $removeUnsupported
     *
     * @return string
     */
    function stringy_to_ascii($str, $removeUnsupported = true)
    {
        return (string) Stringy::create($str)->toAscii($removeUnsupported);
    }
}

if (!function_exists('stringy_pad')) {
    /**
     * @param $str
     * @param $length
     * @param string $padStr
     * @param string $padType
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_pad($str, $length, $padStr = ' ', $padType = 'right',
                         $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->pad($length, $padStr, $padType);
    }
}

if (!function_exists('stringy_pad_left')) {
    /**
     * @param $str
     * @param $length
     * @param string $padStr
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_pad_left($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->padLeft($length, $padStr);
    }
}

if (!function_exists('stringy_pad_right')) {
    /**
     * @param $str
     * @param $length
     * @param string $padStr
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_pad_right($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->padRight($length, $padStr);
    }
}

if (!function_exists('stringy_pad_both')) {
    /**
     * @param $str
     * @param $length
     * @param string $padStr
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_pad_both($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->padBoth($length, $padStr);
    }
}

if (!function_exists('stringy_starts_with')) {
    /**
     * @param $str
     * @param $substring
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_starts_with($str, $substring, $caseSensitive = true,
                                 $encoding = null)
    {
        return Stringy::create($str, $encoding)
            ->startsWith($substring, $caseSensitive);
    }
}

if (!function_exists('stringy_ends_with')) {
    /**
     * @param $str
     * @param $substring
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_ends_with($str, $substring, $caseSensitive = true,
                               $encoding = null)
    {
        return Stringy::create($str, $encoding)
            ->endsWith($substring, $caseSensitive);
    }
}

if (!function_exists('stringy_to_spaces')) {
    /**
     * @param $str
     * @param int $tabLength
     *
     * @return string
     */
    function stringy_to_spaces($str, $tabLength = 4)
    {
        return (string) Stringy::create($str)->toSpaces($tabLength);
    }
}

if (!function_exists('stringy_to_tabs')) {
    /**
     * @param $str
     * @param int $tabLength
     *
     * @return string
     */
    function stringy_to_tabs($str, $tabLength = 4)
    {
        return (string) Stringy::create($str)->toTabs($tabLength);
    }
}

if (!function_exists('stringy_to_lower_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_to_lower_case($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->toLowerCase();
    }
}

if (!function_exists('stringy_to_title_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_to_title_case($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->toTitleCase();
    }
}

if (!function_exists('stringy_to_upper_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_to_upper_case($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->toUpperCase();
    }
}

if (!function_exists('stringy_slugify')) {
    /**
     * @param $str
     * @param string $replacement
     *
     * @return string
     */
    function stringy_slugify($str, $replacement = '-')
    {
        return (string) Stringy::create($str)->slugify($replacement);
    }
}

if (!function_exists('stringy_contains')) {
    /**
     * @param $haystack
     * @param $needle
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_contains($haystack, $needle, $caseSensitive = true,
                              $encoding = null)
    {
        return Stringy::create($haystack, $encoding)
            ->contains($needle, $caseSensitive);
    }
}

if (!function_exists('stringy_contains_any')) {
    /**
     * @param $haystack
     * @param $needles
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_contains_any($haystack, $needles,
                                  $caseSensitive = true, $encoding = null)
    {
        return Stringy::create($haystack, $encoding)
            ->containsAny($needles, $caseSensitive);
    }
}

if (!function_exists('stringy_contains_all')) {
    /**
     * @param $haystack
     * @param $needles
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_contains_all($haystack, $needles,
                                  $caseSensitive = true, $encoding = null)
    {
        return Stringy::create($haystack, $encoding)
            ->containsAll($needles, $caseSensitive);
    }
}

if (!function_exists('stringy_index_of')) {
    /**
     * @param $haystack
     * @param $needle
     * @param int  $offset
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_index_of($haystack, $needle, $offset = 0,
                              $encoding = null)
    {
        return Stringy::create($haystack, $encoding)
            ->indexOf($needle, $offset);
    }
}

if (!function_exists('stringy_index_of_last')) {
    /**
     * @param $haystack
     * @param $needle
     * @param int  $offset
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_index_of_last($haystack, $needle, $offset = 0,
                                   $encoding = null)
    {
        return Stringy::create($haystack, $encoding)
            ->indexOfLast($needle, $offset);
    }
}

if (!function_exists('stringy_surround')) {
    /**
     * @param $str
     * @param $substring
     *
     * @return string
     */
    function stringy_surround($str, $substring)
    {
        return (string) Stringy::create($str)->surround($substring);
    }
}

if (!function_exists('stringy_insert')) {
    /**
     * @param $str
     * @param $substring
     * @param $index
     * @param null $encoding
     *
     * @return string
     */
    function stringy_insert($str, $substring, $index, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->insert($substring, $index);
    }
}

if (!function_exists('stringy_truncate')) {
    /**
     * @param $str
     * @param $length
     * @param string $substring
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_truncate($str, $length, $substring = '',
                              $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->truncate($length, $substring);
    }
}

if (!function_exists('stringy_safe_truncate')) {
    /**
     * @param $str
     * @param $length
     * @param string $substring
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_safe_truncate($str, $length, $substring = '',
                                   $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->safeTruncate($length, $substring);
    }
}

if (!function_exists('stringy_reverse')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_reverse($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->reverse();
    }
}

if (!function_exists('stringy_shuffle')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return string
     */
    function stringy_shuffle($str, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->shuffle();
    }
}

if (!function_exists('stringy_trim')) {
    /**
     * @param $str
     * @param null $chars
     * @param null $encoding
     *
     * @return string
     */
    function stringy_trim($str, $chars = null, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->trim($chars);
    }
}

if (!function_exists('stringy_trim_left')) {
    /**
     * @param $str
     * @param null $chars
     * @param null $encoding
     *
     * @return string
     */
    function stringy_trim_left($str, $chars = null, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->trimLeft($chars);
    }
}

if (!function_exists('stringy_trim_right')) {
    /**
     * @param $str
     * @param null $chars
     * @param null $encoding
     *
     * @return string
     */
    function stringy_trim_right($str, $chars = null, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->trimRight($chars);
    }
}

if (!function_exists('stringy_longest_common_prefix')) {
    /**
     * @param $str
     * @param $otherStr
     * @param null $encoding
     *
     * @return string
     */
    function stringy_longest_common_prefix($str, $otherStr, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->longestCommonPrefix($otherStr);
    }
}

if (!function_exists('stringy_longest_common_suffix')) {
    /**
     * @param $str
     * @param $otherStr
     * @param null $encoding
     *
     * @return string
     */
    function stringy_longest_common_suffix($str, $otherStr, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->longestCommonSuffix($otherStr);
    }
}

if (!function_exists('stringy_longest_common_substring')) {
    /**
     * @param $str
     * @param $otherStr
     * @param null $encoding
     *
     * @return string
     */
    function stringy_longest_common_substring($str, $otherStr,
                                              $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->longestCommonSubstring($otherStr);
    }
}

if (!function_exists('stringy_length')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_length($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->length();
    }
}

if (!function_exists('stringy_substr')) {
    /**
     * @param $str
     * @param $start
     * @param null $length
     * @param null $encoding
     *
     * @return string
     */
    function stringy_substr($str, $start, $length = null, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->substr($start, $length);
    }
}

if (!function_exists('stringy_at')) {
    /**
     * @param $str
     * @param $index
     * @param null $encoding
     *
     * @return string
     */
    function stringy_at($str, $index, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->at($index);
    }
}

if (!function_exists('stringy_first')) {
    /**
     * @param $str
     * @param $n
     * @param null $encoding
     *
     * @return string
     */
    function stringy_first($str, $n, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->first($n);
    }
}

if (!function_exists('stringy_last')) {
    /**
     * @param $str
     * @param $n
     * @param null $encoding
     *
     * @return string
     */
    function stringy_last($str, $n, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->last($n);
    }
}

if (!function_exists('stringy_ensure_left')) {
    /**
     * @param $str
     * @param $substring
     * @param null $encoding
     *
     * @return string
     */
    function stringy_ensure_left($str, $substring, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->ensureLeft($substring);
    }
}

if (!function_exists('stringy_ensure_right')) {
    /**
     * @param $str
     * @param $substring
     * @param null $encoding
     *
     * @return string
     */
    function stringy_ensure_right($str, $substring, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->ensureRight($substring);
    }
}

if (!function_exists('stringy_remove_left')) {
    /**
     * @param $str
     * @param $substring
     * @param null $encoding
     *
     * @return string
     */
    function stringy_remove_left($str, $substring, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->removeLeft($substring);
    }
}

if (!function_exists('stringy_remove_right')) {
    /**
     * @param $str
     * @param $substring
     * @param null $encoding
     *
     * @return string
     */
    function stringy_remove_right($str, $substring, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->removeRight($substring);
    }
}

if (!function_exists('stringy_has_lower_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_has_lower_case($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->hasLowerCase();
    }
}

if (!function_exists('stringy_has_upper_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_has_upper_case($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->hasUpperCase();
    }
}

if (!function_exists('stringy_is_alpha')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_alpha($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isAlpha();
    }
}

if (!function_exists('stringy_is_alphanumeric')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_alphanumeric($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isAlphanumeric();
    }
}

if (!function_exists('stringy_is_blank')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_blank($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isBlank();
    }
}

if (!function_exists('stringy_is_json')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_json($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isJson();
    }
}

if (!function_exists('stringy_is_lower_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_lower_case($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isLowerCase();
    }
}

if (!function_exists('stringy_is_serialized')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_serialized($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isSerialized();
    }
}

if (!function_exists('stringy_is_upper_case')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_upper_case($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isUpperCase();
    }
}

if (!function_exists('stringy_is_hexadecimal')) {
    /**
     * @param $str
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_is_hexadecimal($str, $encoding = null)
    {
        return Stringy::create($str, $encoding)->isHexadecimal();
    }
}

if (!function_exists('stringy_count_substr')) {
    /**
     * @param $str
     * @param $substring
     * @param bool $caseSensitive
     * @param null $encoding
     *
     * @return mixed
     */
    function stringy_count_substr($str, $substring, $caseSensitive = true,
                                  $encoding = null)
    {
        return Stringy::create($str, $encoding)
            ->countSubstr($substring, $caseSensitive);
    }
}

if (!function_exists('stringy_replace')) {
    /**
     * @param $str
     * @param $search
     * @param $replacement
     * @param null $encoding
     *
     * @return string
     */
    function stringy_replace($str, $search, $replacement, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->replace($search, $replacement);
    }
}

if (!function_exists('stringy_regex_replace')) {
    /**
     * @param $str
     * @param $pattern
     * @param $replacement
     * @param string $options
     * @param null   $encoding
     *
     * @return string
     */
    function stringy_regex_replace($str, $pattern, $replacement,
                                   $options = 'msr', $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)
            ->regexReplace($pattern, $replacement, $options, $encoding);
    }
}

if (!function_exists('stringy_html_encode')) {
    /**
     * @param $str
     * @param int  $flags
     * @param null $encoding
     *
     * @return string
     */
    function stringy_html_encode($str, $flags = ENT_COMPAT, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->htmlEncode($flags);
    }
}

if (!function_exists('stringy_html_decode')) {
    /**
     * @param $str
     * @param int  $flags
     * @param null $encoding
     *
     * @return string
     */
    function stringy_html_decode($str, $flags = ENT_COMPAT, $encoding = null)
    {
        return (string) Stringy::create($str, $encoding)->htmlDecode($flags);
    }
}
