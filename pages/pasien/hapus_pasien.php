<?php
include __DIR__ . '/../../koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM tb_pasien WHERE id_siswa = '$
'";

if ($conn->query($query)) {
    header("location: daftar_pasien.php");
} else {
    echo "Data gagal dihapus!";
}