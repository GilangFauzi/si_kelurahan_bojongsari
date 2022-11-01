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
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $fungsi = htmlspecialchars($data["fungsi"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pegawai 
    VALUES
     ('$nip','$nama','$jabatan','$gambar','$fungsi')
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


function hapus($nip)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM pegawai WHERE nip = $nip");
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
    // simpan ke database
    $nip = $data["nip"];
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $fungsi = htmlspecialchars($data["fungsi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // query update data
    $query = "UPDATE pegawai SET
    nip = '$nip',
    nama = '$nama',
    jabatan = '$jabatan',
    fungsi = '$fungsi',
    gambar = '$gambar'
    WHERE nip = $nip
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM pegawai WHERE 
    nama LIKE '%$keyword%' OR
    nip LIKE '%$keyword%' OR
    jabatan LIKE '%$keyword%' 
    ";
    return query($query);
}

function registrasi($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);


    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek username udh ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
    alert('username sudah terdafatar')
    </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
    alert('konfirmasi password tidak sesuai');
    </script>";
        return false;
    }
    // return 1;
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($koneksi);
}
