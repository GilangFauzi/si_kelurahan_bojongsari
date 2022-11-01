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
    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $keterangan = htmlspecialchars($data["keterangan"]);

    // query insert data
    $query = "INSERT INTO galeri 
    VALUES
     ('','$gambar','$keterangan')
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di apload
    if ($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }
    // lolos pengecekan, gambar siap upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}


function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM galeri WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $id = $data["id"];
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // query update data
    $query = "UPDATE galeri SET
    id = '$id',
    gambar = '$gambar',
    keterangan = '$keterangan'
    WHERE id = $id
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM galeri WHERE 
    id LIKE '%$keyword%' OR
    keterangan LIKE '%$keyword%'
    ";
    return query($query);
}
