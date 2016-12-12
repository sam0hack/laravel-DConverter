[![Total Downloads](https://poser.pugx.org/sam0hack/dconverter/downloads)](https://packagist.org/packages/sam0hack/dconverter)
[![Monthly Downloads](https://poser.pugx.org/sam0hack/dconverter/d/monthly)](https://packagist.org/packages/sam0hack/dconverter)
[![Daily Downloads](https://poser.pugx.org/sam0hack/dconverter/d/daily)](https://packagist.org/packages/sam0hack/dconverter)
[![License](https://poser.pugx.org/sam0hack/dconverter/license)](https://packagist.org/packages/sam0hack/dconverter)
# laravel-DConverter
A helper tool for converting and formatting Outputs into human readable format.

#Integration in Laravel

##Install using Composer

Run `composer require sam0hack/dconverter  dev-master`

After you have installed dconverter , open your Laravel config file config/app.php and add the following lines in the $aliases array.

`'DConverter' => sam0hack\dconverter\DC::class,`

#Tools
**SizeFormat --- SizeFormat convert's the laravel getSize() Or bytes data into kb, mb and gb**
**Hours        --- Calculate Hours betweens Two dates**
**Percentage --- Calculate Percentage**
 **MakeColors --- Simply generate hex color**
**DistanceMatrix --- Calculate Time and distance between two locations using google distance API**

###Example of SizeFormat()

`DC::SizeFormat($attachment->file_size)`

#####In blade tamplate
`{{\sam0hack\dconverter\DC::SizeFormat($attachment->file_size)}}`

#####Output examples
* 99.24 kB
* 100 Mb
* 1 GB

###Example of Hours()

`DC::Hours($date,$date2)`

#####In blade tamplate
`{{\sam0hack\dconverter\DC::Hours($date,$date2)}}`

#####Output examples
* 240
* 1
* 60



###Example of Percentage()


    DC::Percentage($current,$total)

 calculate percentage using hours

    $totalhours = DC::Hours($start_date,$end_date);
    
    $currentHours = DC::Hours($start_date,$now_date);
    
    $percentage = DC::Percentage($currentHours,$totalhours);

#####Output examples
* 25
* 33.0
* -150


###Example of MakeColors()

`DC::MakeColors()`

#####In blade tamplate
`{{\sam0hack\dconverter\DC::MakeColors()}}`

#####Output examples
* "#0951e7"
* "#071377"
* "#cdda5d"


###Example of DistanceMatrix()
For Setup DistanceMatrix you need to add google API into config/services.php

'google'=>[
      'GOOGLE_API_KEY' => env('GOOGLE_MAP_API_KEY')
    ],
    OR without using env
 google'=>[
      'GOOGLE_API_KEY' => 'paste you google map api key here'
    ],   

> @Note Config key should be ***GOOGLE_API_KEY***

    DC::DistanceMatrix('New York Ave, El Paso, TX 79902, USA','86 W Houston St, New York, NY 10012, USA')
    $distance = $dist['distance'];
    $time	    = $dist['time'];

#####Output examples
* "2,184 mi"
*  "1 day 8 hours"

***DistanceMatrix Modes - Optionals***
For the calculation of distances, you may specify the transportation mode to use. By default, distances are 

 calculated for driving mode. The following travel modes are supported:
**driving** (default) indicates distance calculation using the road network.
**walking** requests distance calculation for walking via pedestrian paths & sidewalks (where available).
**bicycling** requests distance calculation for bicycling via bicycle paths & preferred streets (where available).

 

    DC::DistanceMatrix($origin, $destination,'walking');


#packagist
https://packagist.org/packages/sam0hack/dconverter



