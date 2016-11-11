<?php
/**
 * Created by PhpStorm.
 * User: sam0hack
 * Date: 5/11/16
 * Time: 4:33 AM
 */

namespace sam0hack\dconverter;

/**
 * Class DC
 * @package sam0hack\dconverter
 */
class DC
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

    /**
     * @param $date1
     * @param $date2
     * @return float|int
     */
    public static function Hours($date1,$date2){

        $t1 = strtotime ( $date1 );
        $t2 = strtotime ( $date2 );
        $diff = $t2 - $t1;
        $hours = $diff / ( 60 * 60 );
        return $hours;
    }

    /**
     * @param $current
     * @param $total
     * @return float|int
     */
    public static function Percentage($current,$total){

        //1÷9×100
        $percentage = ($current / $total * 100);

        $percentage = number_format((float)$percentage, 2, '.', '');
        return $percentage;

    }

    /**
     * @return string
     */
    public static function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

    /**
     * @return string
     */
    public static function MakeColors(){
        $color = self::random_color_part().self::random_color_part().self::random_color_part();
        return $color;
    }


    /**
     * @param $origin
     * @param $destination
     * @param string $mode
     * @return array
     */
    public static function DistanceMatrix($origin, $destination,$mode='')
    {

        $app = app();

        $config = $app['config']['services.google'];

        $KEY = $config['GOOGLE_API_KEY'];


        if ($mode==''){
            $mode='driving';
        }


        $origin=urlencode($origin);
        $destination = urlencode($destination);
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=$origin&destinations=$destination&mode=$mode&key=$KEY";

        $response_a = json_decode(file_get_contents($url), true);


        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];


        return array('distance' => $dist, 'time' => $time);

    }



}

