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
    $rw = htmlspecialchars($data["rw"]);
    $perempuan = htmlspecialchars($data["perempuan"]);
    $lakilaki = htmlspecialchars($data["lakilaki"]);
    $tanggal = date("Y-m-d");
    // query insert data
    $query = "INSERT INTO penduduk
    VALUES
     ('$rw','$perempuan','$lakilaki','$tanggal')
     ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function hapus($rw)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM penduduk WHERE rw = $rw");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $rw = $data["rw"];
    $perempuan = htmlspecialchars($data["perempuan"]);
    $lakilaki = htmlspecialchars($data["lakilaki"]);
    $tanggal = date("Y-m-d");

    // query update data
    $query = "UPDATE penduduk SET
    rw = '$rw',
    perempuan = '$perempuan',
    lakilaki = '$lakilaki',
    tanggal = '$tanggal'
    WHERE rw = $rw
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM penduduk WHERE 
    rw LIKE '%$keyword%' OR
    perempuan LIKE '%$keyword%' OR
    lakilaki LIKE '%$keyword%'
    ";
    return query($query);
}
