<?php
//include koneksi database
include __DIR__ . '/../../koneksi.php';
//get data dari form, validate presence
if (!isset($_POST['id_obat'])) {
    echo "ID Obat tidak ditemukan.";
    exit;
}
$id_obat = mysqli_real_escape_string($conn, $_POST['id_obat']);
$nama_obat = mysqli_real_escape_string($conn, $_POST['nama_obat']);
$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
$tgl_kadaluarsa = mysqli_real_escape_string($conn, $_POST['tgl_kadaluarsa']);
$stok = mysqli_real_escape_string($conn, $_POST['stok']);
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_obat SET id_obat = '$id_obat', nama_obat = '$nama_obat', jenis = '$jenis', tgl_kadaluarsa = '$tgl_kadaluarsa', stok = '$stok' WHERE id_obat = '$id_obat'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($conn, $query)) {
    header("Location: daftar_obat.php");
    exit;
} else {
    echo "Data Gagal Diupdate: " . mysqli_error($conn);
}