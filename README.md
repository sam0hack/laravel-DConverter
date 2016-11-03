# laravel-FileSizeConverter
A helper tool for converting laravel getSize() into human readable format

#Integration in Laravel

After you have installed FileSizeConverter , open your Laravel config file config/app.php and add the following lines in the $aliases array.

`'FileSizeConverter'   => vendor\FileSizeFormat::class`

#Usage

`SizeFormat::formatSizeUnits($attachment->file_size)`

###in blade tamplate
`{{SizeFormat::formatSizeUnits($attachment->file_size)}}`

#Output examples
-99.24 kB
-100 Mb
-1 GB
