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
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);

    $pesan = htmlspecialchars($data["pesan"]);

    // query insert data
    $query = "INSERT INTO saran 
    VALUES
     ('$nik','$nama','$alamat','$email','$pesan')
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($nik)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM saran WHERE nik = $nik");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $nik = $data["nik"];
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

    // query update data
    $query = "UPDATE saran SET
    nik = '$nik',
    nama = '$nama',
    alamat = '$alamat',
    email = '$email',
    pesan = '$pesan'
    WHERE nik = $nik
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM saran WHERE 
    nik LIKE '%$keyword%' OR
    nama LIKE '%$keyword%'
    ";
    return query($query);
}
