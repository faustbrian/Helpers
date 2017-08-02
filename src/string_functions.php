<?php

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use function Stringy\create as s;

if (! function_exists('stringy_chars')) {
    function stringy_chars($str, $encoding = null)
    {
        return s($str, $encoding)->chars();
    }
}

if (! function_exists('stringy_upper_case_first')) {
    function stringy_upper_case_first($str, $encoding = null)
    {
        return (string) s($str, $encoding)->upperCaseFirst();
    }
}

if (! function_exists('stringy_lower_case_first')) {
    function stringy_lower_case_first($str, $encoding = null)
    {
        return (string) s($str, $encoding)->lowerCaseFirst();
    }
}

if (! function_exists('stringy_camelize')) {
    function stringy_camelize($str, $encoding = null)
    {
        return (string) s($str, $encoding)->camelize();
    }
}

if (! function_exists('stringy_upper_camelize')) {
    function stringy_upper_camelize($str, $encoding = null)
    {
        return (string) s($str, $encoding)->upperCamelize();
    }
}

if (! function_exists('stringy_dasherize')) {
    function stringy_dasherize($str, $encoding = null)
    {
        return (string) s($str, $encoding)->dasherize();
    }
}

if (! function_exists('stringy_underscored')) {
    function stringy_underscored($str, $encoding = null)
    {
        return (string) s($str, $encoding)->underscored();
    }
}

if (! function_exists('stringy_delimit')) {
    function stringy_delimit($str, $delimiter, $encoding = null)
    {
        return (string) s($str, $encoding)->delimit($delimiter);
    }
}

if (! function_exists('stringy_swap_case')) {
    function stringy_swap_case($str, $encoding = null)
    {
        return (string) s($str, $encoding)->swapCase();
    }
}

if (! function_exists('stringy_titleize')) {
    function stringy_titleize($str, $ignore = null, $encoding = null)
    {
        return (string) s($str, $encoding)->titleize($ignore);
    }
}

if (! function_exists('stringy_humanize')) {
    function stringy_humanize($str, $encoding = null)
    {
        return (string) s($str, $encoding)->humanize();
    }
}

if (! function_exists('stringy_tidy')) {
    function stringy_tidy($str)
    {
        return (string) s($str)->tidy();
    }
}

if (! function_exists('stringy_collapse_whitespace')) {
    function stringy_collapse_whitespace($str, $encoding = null)
    {
        return (string) s($str, $encoding)->collapseWhitespace();
    }
}

if (! function_exists('stringy_to_ascii')) {
    function stringy_to_ascii($str, $removeUnsupported = true)
    {
        return (string) s($str)->toAscii($removeUnsupported);
    }
}

if (! function_exists('stringy_pad')) {
    function stringy_pad($str, $length, $padStr = ' ', $padType = 'right',
                         $encoding = null)
    {
        return (string) s($str, $encoding)
            ->pad($length, $padStr, $padType);
    }
}

if (! function_exists('stringy_pad_left')) {
    function stringy_pad_left($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) s($str, $encoding)
            ->padLeft($length, $padStr);
    }
}

if (! function_exists('stringy_pad_right')) {
    function stringy_pad_right($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) s($str, $encoding)
            ->padRight($length, $padStr);
    }
}

if (! function_exists('stringy_pad_both')) {
    function stringy_pad_both($str, $length, $padStr = ' ', $encoding = null)
    {
        return (string) s($str, $encoding)
            ->padBoth($length, $padStr);
    }
}

if (! function_exists('stringy_starts_with')) {
    function stringy_starts_with($str, $substring, $caseSensitive = true,
                                 $encoding = null)
    {
        return s($str, $encoding)
            ->startsWith($substring, $caseSensitive);
    }
}

if (! function_exists('stringy_ends_with')) {
    function stringy_ends_with($str, $substring, $caseSensitive = true,
                               $encoding = null)
    {
        return s($str, $encoding)
            ->endsWith($substring, $caseSensitive);
    }
}

if (! function_exists('stringy_to_spaces')) {
    function stringy_to_spaces($str, $tabLength = 4)
    {
        return (string) s($str)->toSpaces($tabLength);
    }
}

if (! function_exists('stringy_to_tabs')) {
    function stringy_to_tabs($str, $tabLength = 4)
    {
        return (string) s($str)->toTabs($tabLength);
    }
}

if (! function_exists('stringy_to_lower_case')) {
    function stringy_to_lower_case($str, $encoding = null)
    {
        return (string) s($str, $encoding)->toLowerCase();
    }
}

if (! function_exists('stringy_to_title_case')) {
    function stringy_to_title_case($str, $encoding = null)
    {
        return (string) s($str, $encoding)->toTitleCase();
    }
}

if (! function_exists('stringy_to_upper_case')) {
    function stringy_to_upper_case($str, $encoding = null)
    {
        return (string) s($str, $encoding)->toUpperCase();
    }
}

if (! function_exists('stringy_slugify')) {
    function stringy_slugify($str, $replacement = '-')
    {
        return (string) s($str)->slugify($replacement);
    }
}

if (! function_exists('stringy_contains')) {
    function stringy_contains($haystack, $needle, $caseSensitive = true,
                              $encoding = null)
    {
        return s($haystack, $encoding)
            ->contains($needle, $caseSensitive);
    }
}

if (! function_exists('stringy_contains_any')) {
    function stringy_contains_any($haystack, $needles,
                                  $caseSensitive = true, $encoding = null)
    {
        return s($haystack, $encoding)
            ->containsAny($needles, $caseSensitive);
    }
}

if (! function_exists('stringy_contains_all')) {
    function stringy_contains_all($haystack, $needles,
                                  $caseSensitive = true, $encoding = null)
    {
        return s($haystack, $encoding)
            ->containsAll($needles, $caseSensitive);
    }
}

if (! function_exists('stringy_index_of')) {
    function stringy_index_of($haystack, $needle, $offset = 0,
                              $encoding = null)
    {
        return s($haystack, $encoding)
            ->indexOf($needle, $offset);
    }
}

if (! function_exists('stringy_index_of_last')) {
    function stringy_index_of_last($haystack, $needle, $offset = 0,
                                   $encoding = null)
    {
        return s($haystack, $encoding)
            ->indexOfLast($needle, $offset);
    }
}

if (! function_exists('stringy_surround')) {
    function stringy_surround($str, $substring)
    {
        return (string) s($str)->surround($substring);
    }
}

if (! function_exists('stringy_insert')) {
    function stringy_insert($str, $substring, $index, $encoding = null)
    {
        return (string) s($str, $encoding)
            ->insert($substring, $index);
    }
}

if (! function_exists('stringy_truncate')) {
    function stringy_truncate($str, $length, $substring = '',
                              $encoding = null)
    {
        return (string) s($str, $encoding)
            ->truncate($length, $substring);
    }
}

if (! function_exists('stringy_safe_truncate')) {
    function stringy_safe_truncate($str, $length, $substring = '',
                                   $encoding = null)
    {
        return (string) s($str, $encoding)
            ->safeTruncate($length, $substring);
    }
}

if (! function_exists('stringy_reverse')) {
    function stringy_reverse($str, $encoding = null)
    {
        return (string) s($str, $encoding)->reverse();
    }
}

if (! function_exists('stringy_shuffle')) {
    function stringy_shuffle($str, $encoding = null)
    {
        return (string) s($str, $encoding)->shuffle();
    }
}

if (! function_exists('stringy_trim')) {
    function stringy_trim($str, $chars = null, $encoding = null)
    {
        return (string) s($str, $encoding)->trim($chars);
    }
}

if (! function_exists('stringy_trim_left')) {
    function stringy_trim_left($str, $chars = null, $encoding = null)
    {
        return (string) s($str, $encoding)->trimLeft($chars);
    }
}

if (! function_exists('stringy_trim_right')) {
    function stringy_trim_right($str, $chars = null, $encoding = null)
    {
        return (string) s($str, $encoding)->trimRight($chars);
    }
}

if (! function_exists('stringy_longest_common_prefix')) {
    function stringy_longest_common_prefix($str, $otherStr, $encoding = null)
    {
        return (string) s($str, $encoding)
            ->longestCommonPrefix($otherStr);
    }
}

if (! function_exists('stringy_longest_common_suffix')) {
    function stringy_longest_common_suffix($str, $otherStr, $encoding = null)
    {
        return (string) s($str, $encoding)
            ->longestCommonSuffix($otherStr);
    }
}

if (! function_exists('stringy_longest_common_substring')) {
    function stringy_longest_common_substring($str, $otherStr,
                                              $encoding = null)
    {
        return (string) s($str, $encoding)
            ->longestCommonSubstring($otherStr);
    }
}

if (! function_exists('stringy_length')) {
    function stringy_length($str, $encoding = null)
    {
        return s($str, $encoding)->length();
    }
}

if (! function_exists('stringy_substr')) {
    function stringy_substr($str, $start, $length = null, $encoding = null)
    {
        return (string) s($str, $encoding)->substr($start, $length);
    }
}

if (! function_exists('stringy_at')) {
    function stringy_at($str, $index, $encoding = null)
    {
        return (string) s($str, $encoding)->at($index);
    }
}

if (! function_exists('stringy_first')) {
    function stringy_first($str, $n, $encoding = null)
    {
        return (string) s($str, $encoding)->first($n);
    }
}

if (! function_exists('stringy_last')) {
    function stringy_last($str, $n, $encoding = null)
    {
        return (string) s($str, $encoding)->last($n);
    }
}

if (! function_exists('stringy_ensure_left')) {
    function stringy_ensure_left($str, $substring, $encoding = null)
    {
        return (string) s($str, $encoding)->ensureLeft($substring);
    }
}

if (! function_exists('stringy_ensure_right')) {
    function stringy_ensure_right($str, $substring, $encoding = null)
    {
        return (string) s($str, $encoding)->ensureRight($substring);
    }
}

if (! function_exists('stringy_remove_left')) {
    function stringy_remove_left($str, $substring, $encoding = null)
    {
        return (string) s($str, $encoding)->removeLeft($substring);
    }
}

if (! function_exists('stringy_remove_right')) {
    function stringy_remove_right($str, $substring, $encoding = null)
    {
        return (string) s($str, $encoding)->removeRight($substring);
    }
}

if (! function_exists('stringy_has_lower_case')) {
    function stringy_has_lower_case($str, $encoding = null)
    {
        return s($str, $encoding)->hasLowerCase();
    }
}

if (! function_exists('stringy_has_upper_case')) {
    function stringy_has_upper_case($str, $encoding = null)
    {
        return s($str, $encoding)->hasUpperCase();
    }
}

if (! function_exists('stringy_is_alpha')) {
    function stringy_is_alpha($str, $encoding = null)
    {
        return s($str, $encoding)->isAlpha();
    }
}

if (! function_exists('stringy_is_alphanumeric')) {
    function stringy_is_alphanumeric($str, $encoding = null)
    {
        return s($str, $encoding)->isAlphanumeric();
    }
}

if (! function_exists('stringy_is_blank')) {
    function stringy_is_blank($str, $encoding = null)
    {
        return s($str, $encoding)->isBlank();
    }
}

if (! function_exists('stringy_is_json')) {
    function stringy_is_json($str, $encoding = null)
    {
        return s($str, $encoding)->isJson();
    }
}

if (! function_exists('stringy_is_lower_case')) {
    function stringy_is_lower_case($str, $encoding = null)
    {
        return s($str, $encoding)->isLowerCase();
    }
}

if (! function_exists('stringy_is_serialized')) {
    function stringy_is_serialized($str, $encoding = null)
    {
        return s($str, $encoding)->isSerialized();
    }
}

if (! function_exists('stringy_is_upper_case')) {
    function stringy_is_upper_case($str, $encoding = null)
    {
        return s($str, $encoding)->isUpperCase();
    }
}

if (! function_exists('stringy_is_hexadecimal')) {
    function stringy_is_hexadecimal($str, $encoding = null)
    {
        return s($str, $encoding)->isHexadecimal();
    }
}

if (! function_exists('stringy_count_substr')) {
    function stringy_count_substr($str, $substring, $caseSensitive = true,
                                  $encoding = null)
    {
        return s($str, $encoding)
            ->countSubstr($substring, $caseSensitive);
    }
}

if (! function_exists('stringy_replace')) {
    function stringy_replace($str, $search, $replacement, $encoding = null)
    {
        return (string) s($str, $encoding)
            ->replace($search, $replacement);
    }
}

if (! function_exists('stringy_regex_replace')) {
    function stringy_regex_replace($str, $pattern, $replacement,
                                   $options = 'msr', $encoding = null)
    {
        return (string) s($str, $encoding)
            ->regexReplace($pattern, $replacement, $options, $encoding);
    }
}

if (! function_exists('stringy_html_encode')) {
    function stringy_html_encode($str, $flags = ENT_COMPAT, $encoding = null)
    {
        return (string) s($str, $encoding)->htmlEncode($flags);
    }
}

if (! function_exists('stringy_html_decode')) {
    function stringy_html_decode($str, $flags = ENT_COMPAT, $encoding = null)
    {
        return (string) s($str, $encoding)->htmlDecode($flags);
    }
}

if (! function_exists('camel_case')) {
    function camel_case(string $value): string
    {
        return s($value)->camelize();
    }
}

if (! function_exists('dash_case')) {
    function dash_case(string $value): string
    {
        return s($value)->dasherize();
    }
}

if (! function_exists('human_case')) {
    function human_case(string $value): string
    {
        return s($value)->humanize();
    }
}

if (! function_exists('swap_case')) {
    function swap_case(string $value): string
    {
        return s($value)->swapCase();
    }
}

if (! function_exists('title_case')) {
    function title_case(string $value): string
    {
        return s($value)->titleize();
    }
}

if (! function_exists('snake_case')) {
    function snake_case(string $value): string
    {
        return s($value)->underscored();
    }
}

if (! function_exists('space_case')) {
    function space_case(string $value): string
    {
        return human_case($value);
    }
}
