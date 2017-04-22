<?php



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
