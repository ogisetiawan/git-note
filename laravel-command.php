<?php
/**
 ** LARAVEL 6 : framerok php modern and powerfull 
 *? TEMPLATE  : laravel menggunakan templating blade
 *? ENVIORMENT: configuration database,mailing dll
 *  
*/

//@ LARAVEL ARTISAN
/// INSTALL
//! composer create-project --prefer-dist laravel/[nama_folder_proect]: perintah untuk install laravel 
//? create-project                                                    : perintah untuk create-project
//? --prefer-dist                                                     : perintah untuk download versi rekomendasi

/// RUNNING
//! php artisan serve                                                 : perintah untuk menjalankan ke dlm server 
//? --prefer-dist                                                     : atau bsa dijalankan dgn perintah localhost://[nama_dir]/public dlm folder public

/// CREATE FOLDER
//! php artisan make:controller [nama_controller]                     : untuk membuat sebuah controller 

/// MAINTENANCE
//! php artisan down                                                  : untuk mengaktifkan mode maintenence
//! php artisan up                                                    : untuk menonaktifkan mode maintenence

//@ DIRECTORY
//# route     : app/routes/web.php
//# view      : app/resources/view/[file_view]
//# controller: app/http/cotrollers


//@ ENVIOREMENT
//? fitur configruation project laravel di dalam sebuah file .env spertin databse, mail, auth dll
//? file env.example adalah backupan file .env scara default