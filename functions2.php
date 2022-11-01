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

    $visi = htmlspecialchars($data["visi"]);
    $misi = htmlspecialchars($data["misi"]);

    // query insert data
    $query = "INSERT INTO visimisi 
    VALUES
     ('','$visi','$misi')
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM visimisi WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $id = $data["id"];
    $visi = htmlspecialchars($data["visi"]);
    $misi = htmlspecialchars($data["misi"]);

    // query update data
    $query = "UPDATE visimisi SET
    visi = '$visi',
    misi = '$misi'
    WHERE id = $id ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM visimisi WHERE 
    id LIKE '%$keyword%' OR
    misi LIKE '%$keyword%'
    ";
    return query($query);
}
