<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query =  "SELECT * FROM pegawai WHERE 
nama LIKE '%$keyword%' OR
nip LIKE '%$keyword%' OR
jabatan LIKE '%$keyword%' 
";
$pegawai = query($query);
?>
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