<?php
/**
 * Created by PhpStorm.
 * User: sam0hack
 * Date: 4/11/16
 * Time: 4:28 AM
 */

namespace vendor\FileSizeFormat;

/**
 * Class FileSizeFormat
 * @package vendoe\FileSizeFormat
 */
class FileSizeFormat
{
    /**
     * @param $bytes
     * @return string
     */
    public static function SizeFormat($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' kB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
    }
}
