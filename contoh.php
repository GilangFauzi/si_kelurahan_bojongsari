<?php
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $pegawai = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <input type='text' name='keyword' placeholder='Cari woy' autofocus id="keyword"></input>
    <button type='submit' id='tombol-cari' name='cari'>Cari</button>
    <div id="container">
        <table class="table table-striped table-responsive">

            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Fungsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($pegawai as $row) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nip"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jabatan"]; ?></td>

                <td><?= $row["fungsi"]; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" </td>

                <td>
                    <button type='submit' value='ubah'><a href="ubah.php?nip=<?= $row["nip"]; ?>">Ubah</button>
                    <a href="hapus.php?nip=<?= $row["nip"]; ?>"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><span
                            class="badge badge-danger"><i class="fas fa fa-trash"></i></span></a>
                </td>

            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
    <div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <!-- Java script buat search ajax -->
        <script src="js/script2.js"></script>
    </div>
</body>

</html>