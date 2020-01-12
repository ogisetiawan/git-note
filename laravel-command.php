<?php
/**
 ** LARAVEL 6 : framerok php modern and powerfull 
 *? TEMPLATE  : laravel menggunakan templating blade
 *? ENVIORMENT: configuration database,mailing dll
 *? SEEDING   : fitur untuk membuat data dummy kdlam database 
 *? FAKER     : sbuah libraary untuk membuat data dummy scara automatis dgn data yg tersedia scara random 
*/

//@ LARAVEL ARTISAN
/// INSTALL
//! composer create-project --prefer-dist laravel/[nama_folder_proect]: perintah untuk install laravel 
//? create-project                                                    : perintah untuk create-project
//? --prefer-dist                                                     : perintah untuk download versi rekomendasi

/// RUNNING
//! php artisan serve: perintah untuk menjalankan ke dlm server 
//?                  : atau bsa dijalankan dgn perintah localhost://[nama_dir]/public dlm folder public

/// CREATE FILE
//! php artisan make:controller [nama_controller]                     : untuk membuat sebuah controller 
//! php artisan make:controller [nama_folder]/[nama_controller]       : untuk membuat sebuah controller didalam folder

/// MAINTENANCE
//! php artisan down: untuk mengaktifkan mode maintenence
//! php artisan up  : untuk menonaktifkan mode maintenence

/// TESTING
//! php artisan make:seeder [nama_seeder]    : untuk membuat sebuah file seeder
//! php artisan db:seed --class=[nama_seeder]: menjalankan pertintah seeder pada method run()
//! php artisan db:seed                      : smua file seeder akan dijalankan

//@ DIRECTORY
//# route     : routes/web.php
//# view      : resources/view/[file_view]
//# controller: app/http/cotrollers
//# seed      : database/seeds

//@ ENVIOREMENT
//? fitur configruation project laravel di dalam sebuah file .env spertin databse, mail, auth dll
//? file env.example adalah backupan file .env scara default

//@ DATABASE
//? query builder: fitur pengelolah database agar lebih penulisan efesien
//? eloquent     : 

//@ SECURITY
//? crf proteksion : fitur keamanan untul pencegahan input data dari luar aplikasi, dgn menambahakn crf_field() mka app
//?                -akan generete token scara otomatis