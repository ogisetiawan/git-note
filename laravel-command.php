<?php
/**
 ** LARAVEL 6 : framerok php modern and powerfull 
 *? ROUTE     : akses jalur dari request app sperti http,artisan dll
 *? CONTROLLER: pengelola data dari action2 dalam method/function tersetbut
 *? ENVIORMENT: configuration database,mailing dll
 *? MIGRATION : versioning controller pada structure database
 *? SEEDING   : fitur untuk membuat data dummy kdlam database 
 *? FAKER     : sbuah libraary untuk membuat data dummy scara automatis dgn data yg tersedia scara random 
 *? ELOQUENT  : Object Relation Mapping (ORM) pada laravel 
 *? SOFTDELETE : fitur pada laravel untuk membuat data tidak benar2 terhapus
*/

// -------------------------------------------------------------------------------------------------------------

//@ DIRECTORY
    //# route     : routes/web.php
    //# view      : resources/view/[file_view]
    //# controller: app/http/cotrollers
    //# seed      : database/seeds
    //# assets    : public
    //# migration : database/migration
    //# model     : app

// -------------------------------------------------------------------------------------------------------------

//@ LARAVEL ARTISAN CHEEETSHEET
    //~ INSTALL
    //! composer create-project --prefer-dist laravel/[nama_folder_proect]: perintah untuk install laravel 
    //? create-project                                                    : perintah untuk create-project
    //? --prefer-dist                                                     : perintah untuk download versi rekomendasi

    //~ RUNNING
    //! php artisan serve: perintah untuk menjalankan ke dlm server 
    //?                  : atau bsa dijalankan dgn perintah localhost://[nama_dir]/public dlm folder public

    //~ CONTROLLER
    //! php artisan make:controller [nama_controller]                            : untuk membuat sebuah controller 
    //! php artisan make:controller [nama_folder]/[nama_controller]              : untuk membuat sebuah controller didalam folder
    //! php artisan make:controller [nama_folder]/[nama_controller] --resource   : untuk membuat sebuah controller didalam dan menambahkan action resource

    //~ MAINTENANCE
    //! php artisan down: untuk mengaktifkan mode maintenence
    //! php artisan up  : untuk menonaktifkan mode maintenence

    //~ MIGRATE
    //! php artisan make:migration create_[nama_table]_table                : membuat file migration dgn {tanggal_pembuatan_nama_migration}
    //?                                                                     - jika kita buat tdak sesiai format create_{nama_table}_table maka pda method up() tdak akan terisi
    //?                                                                     - method up() untuk mmbuat dan merubah struktur table
    //?                                                                     - method down() membtalkan apa yg telah dieksekui method up()
    //! php artisan migrate                                                 : menjalankan perintah migrate pada dir migrate dan method up()
    //! php artisan migrate:rollback                                        : menjalankan periintah migrate  pada dir migrate dan method down()

    //~ SEEDER
    //! php artisan make:seeder [nama_seeder]    : untuk membuat sebuah file seeder
    //! php artisan db:seed --class=[nama_seeder]: menjalankan pertintah seeder pada method run()
    //! php artisan db:seed                      : smua file seeder akan dijalankan
    //? isi pada class DatabaseSeeder untuk apasaja seeder yg dpt djlankan bersamaan;

// -------------------------------------------------------------------------------------------------------------

// @ ABOUT ?
    //~ ROUTE
    //? web route          : digunakan untuk request HTTP
    ///                    - get   : request dari url sbuah browser
    ///                    - post  : proses kirim data 
    ///                    - put   : proses kirim data bersifat update bukan create {proses_edit}
    ///                    - patch   : proses kirim data bersifat update bukan create {proses_edit}
    ///                    - delete: penghapusan sebuah data
    //? api route          : digunakan untuk request HTTP tapi bebeda perlakuanya
    //? console route      : untuk merubah/ menjalakan php artisan 
    ///                    - php artisan inspire: akan menjalakan perintah pada method trsbut 
    //? chanel route       : hak akses user untuk check aplikasi tertentu 
    //? route group        : membuat grouping pada sbuah route jika mempunyai prefix yang sama 

    //~ CONTROLLER
    //? action resource    : memberikan anatomi controller / method pada controller secara otomastis

    //~ ENVIOREMENT
    //? fitur configruation project laravel di dalam sebuah file .env spertin databse, mail, auth dll
    //? file env.example adalah backupan file .env scara default

    //~ DATABASE
    //? query builder: fitur pengelolah database agar penulisan lebih efesien
    //? eloquent     : fitur pengelolah database agar penulisan lebih efesien dan efektif

    //~ MIGRATION
    //? membuat dan merubah structure table pada sbuah code (first code)
    //? schma builder : facade untuk mengubah struktur table dan database
    //? lihat file migration t_todo_table
    //? case method up() : mengecek ada table->membuat table dgn penambahan coloumn timestamp | merubah struktur
    //? case method down() : drop table->membuat table tnpa timstamp
    //? case tersebut kita membuat versioning bru ada coloumn created_at dan updated at
    //? ketika rollback kita dpt versi sblmny coloumn created_at dan updated at

    //~ SEEDER
    //? fitur untuk menambahkan beberapa data dummy pada table, untuk kebutuhan testing

    //~ ELOQUENT
    //? fitur pada laravel untuk megelola sbuah database scra singkat,
    //? mass_asiigment :fitur untuk membantu ketika byk dta yg harus diinsert dgn $request->all();
    //? fillablle : properti pd model untuk menentukan field mana saja yg diperbolehkan mass_assigment;
    //?      - fitur diatas mencegah untuk inject data yg dilakakuan oleh mass_asigment
    /// see query documentation in website

    //~ RECORD ELOQUENT
    //? insert record
    //? update record
    //? delete record

    //~ SECURITY
    //? crf proteksion : fitur keamanan untul pencegahan input data dari luar aplikasi, dgn menambahakn crf_field() mka app
    //?                -akan generete token scara otomatis