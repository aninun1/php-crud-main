<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'function.php';

$id_mahasiswa = $_GET["id_mahasiswa"];

if (hapus($id_mahasiswa) > 0) {
    echo "
        <script>
            alert('Data Telah Dihapus!');
            document.location.href = 'admin.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'admin.php';
        </script>
    ";
}
?>