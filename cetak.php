<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    
</head>
<body>
    <h1 align="center">Daftar Pegawai Kelurahan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
         <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Fungsi</th>
            <th>Gambar</th>
        </tr>';

        $i = 1;
    foreach( $pegawai as $row ) {
    $html .= '<tr>
        <td>'. $i++ .'</td>
        <td>'. $row["nip"].'</td>
        <td>'. $row["nama"].'</td>
        <td>'. $row["jabatan"].'</td>
        <td>'. $row["fungsi"].'</td>
        <td> <img src="img/'. $row["gambar"].'" width="50"></td>
        </tr>';
    
}

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-pegawai.pdf', \Mpdf\Output\Destination::INLINE);
?>