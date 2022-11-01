<?php
// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions6.php';
$rw = $_GET["rw"];
if (hapus($rw) > 0) {
    echo "
    <script>
    alert('Data Berhasil di Hapus');
    document.location.href = 'penduduk.php';
    </script>
    ";
} else {
    echo "
 <script>
 alert('Data Gagal di Hapus');
 document.location.href = 'penduduk.php';
 </script>
 ";
}
