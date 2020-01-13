<?php
/**
 ** LARAVEL 6 : framerok php modern and powerfull 
 *? ROUTE    : akses jalur dari request app sperti http,artisan dll
 *? CONTROLLER :
 * 
 *? TEMPLATE  : laravel menggunakan templating blade
 *? ENVIORMENT: configuration database,mailing dll
 *? SEEDING   : fitur untuk membuat data dummy kdlam database 
 *? FAKER     : sbuah libraary untuk membuat data dummy scara automatis dgn data yg tersedia scara random 
 *? MIGRATION : versioning controller pada structure database
 * 
*/

//@ DIRECTORY
//# route     : routes/web.php
//# view      : resources/view/[file_view]
//# controller: app/http/cotrollers
//# seed      : database/seeds
//# assets    : public
//# migrateion: database/migration


//@ LARAVEL ARTISAN CHEEETSHEET
/// INSTALL
//! composer create-project --prefer-dist laravel/[nama_folder_proect]: perintah untuk install laravel 
//? create-project                                                    : perintah untuk create-project
//? --prefer-dist                                                     : perintah untuk download versi rekomendasi

/// RUNNING
//! php artisan serve: perintah untuk menjalankan ke dlm server 
//?                  : atau bsa dijalankan dgn perintah localhost://[nama_dir]/public dlm folder public

/// CONTROLLER
//! php artisan make:controller [nama_controller]                     : untuk membuat sebuah controller 
//! php artisan make:controller [nama_folder]/[nama_controller]       : untuk membuat sebuah controller didalam folder

/// MAINTENANCE
//! php artisan down: untuk mengaktifkan mode maintenence
//! php artisan up  : untuk menonaktifkan mode maintenence

/// MIGRATE
//! php artisan make:migration create_[nama_table]_table                : membuat file migration dgn {tanggal_pembuatan_nama_migration}
//?                                                                     - jika kita buat tdak sesiai format create_{nama_table}_table maka pda method up() tdak akan terisi
//?                                                                     - method up() untuk mmbuat dan merubah struktur table
//?                                                                     - method down() membtalkan apa yg telah dieksekui method up()
//! php artisan migrate                                                 : menjalankan perintah migrate pada dir migrate dan method up()
//! php artisan migrate:rollback                                        : menjalankan periintah migrate  pada dir migrate dan method down()

/// TESTING
//! php artisan make:seeder [nama_seeder]    : untuk membuat sebuah file seeder
//! php artisan db:seed --class=[nama_seeder]: menjalankan pertintah seeder pada method run()
//! php artisan db:seed                      : smua file seeder akan dijalankan

//@ ROUTE
//? web route          : digunakan untuk request HTTP
///                    - get   : request dari url sbuah browser
///                    - post  : proses kirim data 
///                    - put   : proses kirim data bersifat update bukan create {proses_edit}
///                    - delete: penghapusan sebuah data
//? api route          : digunakan untuk request HTTP tapi bebeda perlakuanya
//? console route      : untuk merubah/ menjalakan php artisan 
///                    - php artisan inspire: akan menjalakan perintah pada method trsbut 
//? chanel route       : hak akses user untuk check aplikasi tertentu 
//? route group        : membuat grouping pada sbuah route jika mempunyai prefix yang sama 

//@ ENVIOREMENT
//? fitur configruation project laravel di dalam sebuah file .env spertin databse, mail, auth dll
//? file env.example adalah backupan file .env scara default

//@ DATABASE
//? query builder: fitur pengelolah database agar lebih penulisan efesien
//? eloquent     : 

//@ SECURITY
//? crf proteksion : fitur keamanan untul pencegahan input data dari luar aplikasi, dgn menambahakn crf_field() mka app
//?                -akan generete token scara otomatis