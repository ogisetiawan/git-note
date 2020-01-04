<?php
/**
 ** composer : program untuk menejemen proyek base php  
 *?            - mengintall library yang saling membutuhkan (depedency)
 *?            - running script
 *?            - testing 
 */

//@ COMPOSER CONFIG
//! composer init                      : perintah untuk melakukan instalasi pada sebuah directory
//?                                    - perintah ini akan menghasilkan composer.json pada dir
//! composer require nesbot/carbon -vvv: perintah untuk melakukan instalasi library 
//?                                    - composer.json pd attribute required akan terisi sesuai nama libarary 
//?                                    - selain itu akan ada kumpulan library pada folder vendor
//! composer search [nama_lib]         : perintah untuk mencari library or packagist.org
//! composer remove <vendor>/<library> : perintah untuk menhapus salah satu lib yang sudah terinstall
