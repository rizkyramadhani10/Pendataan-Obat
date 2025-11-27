<?php
include __DIR__ . '/../../koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_obat WHERE id_obat = $id";

if ($conn->query($query) === TRUE) {
    header("Location: daftar_obat.php");
    exit;
} else {
    echo "Data gagal dihapus: " . $conn->error;
}