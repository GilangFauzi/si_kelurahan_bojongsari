<?php
// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions8.php';
$nomer = $_GET["nomer"];
if (hapus($nomer) > 0) {
    echo "
    <script>
    alert('Data Berhasil di Hapus');
    document.location.href = 'agama.php';
    </script>
    ";
} else {
    echo "
 <script>
 alert('Data Gagal di Hapus');
 document.location.href = 'agama.php';
 </script>
 ";
}
