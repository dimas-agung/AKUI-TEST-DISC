<?php

require 'url_api.php'; 
$nik = $_GET['nik'];

// Membentuk URL lengkap dengan parameter nik
$url = $url_api . 'api/Pelamar?nik=' . $nik;

// Menggunakan file_get_contents untuk mendapatkan data dari URL
$data = file_get_contents($url);
echo $url;
// echo $data;
?>
