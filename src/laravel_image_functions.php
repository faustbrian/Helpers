<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('extract_colours')) {
    function extract_colours($file, $amount = 6, $type = 'png')
    {
        $palette = League\ColorExtractor\Palette::fromFilename($file);

        $extractor = new League\ColorExtractor\ColorExtractor($palette);

        return $extractor->extract($amount);
    }
}

if (!function_exists('intervention')) {
    function intervention()
    {
        return app('image');
    }
}
