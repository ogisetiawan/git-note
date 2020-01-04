<?php

require 'vendor/autoload.php';
date_default_timezone_set("Asia/Jakarta");

use Carbon\Carbon;

$sekarang = Carbon::now();

echo "Sekarang: $sekarang <br>";
echo "Umur saya: " . Carbon::createFromDate(1995, 10, 16)->age . "<br>";