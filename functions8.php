<?php
// koneksi php ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbsisteminformasidesa");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    // simpan ke database
    $uraian = htmlspecialchars($data["uraian"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $tanggal = date("Y-m-d");
    // query insert data
    $query = "INSERT INTO agama
    VALUES
     ('','$uraian','$jumlah','$tanggal')
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function hapus($nomer)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM agama WHERE nomer = $nomer");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $nomer = htmlspecialchars($data["nomer"]);
    $uraian = htmlspecialchars($data["uraian"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $tanggal = date("Y-m-d");

    // query update data
    $query = "UPDATE agama SET
    nomer = '$nomer',
    uraian = '$uraian',
    jumlah = '$jumlah',
    tanggal = '$tanggal'
    WHERE nomer = $nomer
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM agama WHERE 
    nomer LIKE '%$keyword%' OR
    uraian LIKE '%$keyword%' 
    ";
    return query($query);
}
