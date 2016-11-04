# laravel-FileSizeConverter
A helper tool for converting laravel getSize() into human readable format

#Integration in Laravel

After you have installed FileSizeConverter , open your Laravel config file config/app.php and add the following lines in the $aliases array.

`FileSizeConverter'   => sam0hack\FileSizeConverter::class,`

#Usage

`FileSizeConverter::SizeFormat($attachment->file_size))`

###In blade tamplate
`{{\sam0hack\FileSizeConverter::SizeFormat($attachment->file_size)}}`

#Output examples
* 99.24 kB
* 100 Mb
* 1 GB

