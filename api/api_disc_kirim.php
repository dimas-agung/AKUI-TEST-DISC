<?php
require 'url_api.php';
$nik = $_GET['nik'];

$ch = curl_init();

$url = $url_api . 'api/Disc/Store';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

$data = array(
    'nik' => $_POST['nik'],
    'line1' => json_encode($_POST['line1']),
    'line2' => json_encode($_POST['line2']),
    'line3' => json_encode($_POST['line3']),
    'grafik1' => json_encode($_POST['grafik1']),
    'grafik2' => json_encode($_POST['grafik2']),
    'grafik3' => json_encode($_POST['grafik3']),
    'kepribadian1' => json_encode($_POST['kep_umum']),
    'kepribadian2' => json_encode($_POST['kep_tekan']),
    'kepribadian3' => json_encode($_POST['kep_sembunyi']),
    'deskripsi_kepribadian' => $_POST['person'],
    'job_match' => $_POST['job'],
);

$post_fields = http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); // Setel bidang pos dengan benar

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

var_dump(json_decode($response));

return;
echo ($response);
?>